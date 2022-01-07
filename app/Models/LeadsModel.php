<?php

namespace App\Models;

use CodeIgniter\Model;

class LeadsModel extends Model {

    /**
     * Called during initialization. Appends
     * our custom field to the module's model.
     */
    protected function initialize()
    {
        $this->db = \Config\Database::connect();
        $this->client_leads = $this->db->table('leads');
        $this->leads = $this->db->table('lead_assignments');
        $this->projects = $this->db->table('projects');
        $this->users = $this->db->table('users');
        $this->statuses = $this->db->table('lead_statuses');
    }

    public function FetchLeads($id = NULL, $perPage = null, $offset = null) {
        $result = NULL;
        
        if ($id != NULL) {
            $result = $this->leads->select("leads.lead_id, leads.lead_client_name, leads.lead_client_phone, projects.project_name, locations.location_name, leads.lead_date, users.user_fullname, departments.department_name, lead_statuses.lead_status_name")->join('leads', 'lead_assignments.lead_assignment_lead_id = leads.lead_id', 'left')->join('projects', 'leads.lead_project_id = projects.project_id', 'left')->join('locations', 'projects.project_location_id = locations.location_id', 'left')->join('users', 'lead_assignments.lead_assignment_user_id = users.user_id', 'left')->join('departments', 'users.user_department_id = departments.department_id', 'left')->join('lead_statuses', 'lead_assignments.lead_assignment_status_id = lead_statuses.lead_status_id', 'left')->where('leads.lead_id', $id)->limit($perPage, $offset)->get();
        } else {
            $result = $this->leads->select("leads.lead_id, leads.lead_client_name, leads.lead_client_phone, projects.project_name, locations.location_name, leads.lead_date, users.user_fullname, departments.department_name, lead_statuses.lead_status_name")->join('leads', 'lead_assignments.lead_assignment_lead_id = leads.lead_id', 'left')->join('projects', 'leads.lead_project_id = projects.project_id', 'left')->join('locations', 'projects.project_location_id = locations.location_id', 'left')->join('users', 'lead_assignments.lead_assignment_user_id = users.user_id', 'left')->join('departments', 'users.user_department_id = departments.department_id', 'left')->join('lead_statuses', 'lead_assignments.lead_assignment_status_id = lead_statuses.lead_status_id', 'left')->orderBy('leads.lead_id', 'DESC')->limit($perPage, $offset)->get();
        }
        
        return $result->getResultArray();
    }

    private function FetchEmployee_LeastLeads() {
        $query = $this->db->query('SELECT users.user_id, COUNT(lead_assignments.lead_assignment_lead_id) AS total FROM `users` LEFT JOIN lead_assignments ON lead_assignments.lead_assignment_user_id = users.user_id GROUP BY users.user_id ORDER BY total ASC LIMIT 1');
        return $query->getResultArray();
    }

    public function InsertLead($data) {
        $this->db->transBegin();
        
        $this->db->query('INSERT INTO leads (`lead_client_name`, `lead_client_phone`, `lead_project_id`, `lead_date`) VALUES ("' . $data["lead_client_name"] . '", "' . $data["lead_client_phone"] . '", "' . $data["lead_project_id"] . '", "' . $data["lead_date"] . '")');
        
        $lead_id = $this->db->insertID();
        
        $this->db->query('INSERT INTO lead_assignments (`lead_assignment_lead_id`, `lead_assignment_user_id`, `lead_assignment_lead_owner`) VALUES ("' . $lead_id . '", "' . $this->FetchEmployee_LeastLeads()[0]["user_id"] . '", "' . $_SESSION["user_id"] . '")');

        if ($this->db->transStatus() === TRUE) {
            $this->db->transCommit();
            return TRUE;
        } else {
            $this->db->transRollback();
            return FALSE;
        }
    }

    public function FetchProjects() {
        $result = $this->projects->select('*')->get();
        return $result->getResultArray();
    }

    public function FetchUsers() {
        $result = $this->users->select('users.user_id, users.user_fullname')->where('users.user_status', 1)->get();
        return $result->getResultArray();
    }

    public function FetchStatuses() {
        $result = $this->statuses->select('lead_statuses.lead_status_id, lead_statuses.lead_status_name')->get();
        return $result->getResultArray();
    }
}