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
        $this->leads = $this->db->table('lead_assignments');
    }

    public function FetchLeads($id = NULL, $perPage = null, $offset = null) {
        $result = NULL;
        
        if ($id != NULL) {
            $result = $this->leads->select("leads.lead_id, leads.lead_client_name, leads.lead_client_phone, projects.project_name, locations.location_name, leads.lead_date, users.user_fullname, departments.department_name, lead_statuses.lead_status_name")->join('leads', 'lead_assignments.lead_assignment_lead_id = leads.lead_id', 'left')->join('projects', 'leads.lead_project_id = projects.project_id', 'left')->join('locations', 'projects.project_location_id = locations.location_id', 'left')->join('users', 'lead_assignments.lead_assignment_user_id = users.user_id', 'left')->join('departments', 'users.user_department_id = departments.department_id', 'left')->join('lead_statuses', 'lead_assignments.lead_assignment_status_id = lead_statuses.lead_status_id', 'left')->where('leads.lead_id', $id)->limit($perPage, $offset)->get();
        } else {
            $result = $this->leads->select("leads.lead_id, leads.lead_client_name, leads.lead_client_phone, projects.project_name, locations.location_name, leads.lead_date, users.user_fullname, departments.department_name, lead_statuses.lead_status_name")->join('leads', 'lead_assignments.lead_assignment_lead_id = leads.lead_id', 'left')->join('projects', 'leads.lead_project_id = projects.project_id', 'left')->join('locations', 'projects.project_location_id = locations.location_id', 'left')->join('users', 'lead_assignments.lead_assignment_user_id = users.user_id', 'left')->join('departments', 'users.user_department_id = departments.department_id', 'left')->join('lead_statuses', 'lead_assignments.lead_assignment_status_id = lead_statuses.lead_status_id', 'left')->limit($perPage, $offset)->get();
        }
        
        return $result->getResultArray();
    }


}