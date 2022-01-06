<?php

namespace App\Models\User;

use CodeIgniter\Model;

class UserModel extends Model {

    /**
     * Called during initialization. Appends
     * our custom field to the module's model.
     */
    protected function initialize()
    {
        $this->db = \Config\Database::connect();
        $this->employees = $this->db->table('users');
        $this->leads = $this->db->table('lead_assignments');
    }

    public function FetchNewLeads($user_id) {
        $result = $this->employees->select('COUNT(lead_assignments.lead_assignment_user_id) as total_new_leads')->where('user_id', $user_id)->join('lead_assignments', 'users.user_id = lead_assignments.lead_assignment_user_id', 'left')->where('lead_assignments.lead_assignment_status_id', 1)->get();
        return $result->getResultArray();
    }

    public function FetchPendingLeads($user_id) {
        $result = $this->employees->select('COUNT(lead_assignments.lead_assignment_user_id) as total_pending_leads')->where('user_id', $user_id)->join('lead_assignments', 'users.user_id = lead_assignments.lead_assignment_user_id', 'left')->where('lead_assignments.lead_assignment_status_id', 2)->get();
        return $result->getResultArray();
    }

    public function FetchConvertedLeads($user_id) {
        $result = $this->employees->select('COUNT(lead_assignments.lead_assignment_user_id) as total_converted_leads')->where('user_id', $user_id)->join('lead_assignments', 'users.user_id = lead_assignments.lead_assignment_user_id', 'left')->where('lead_assignments.lead_assignment_status_id', 8)->get();
        return $result->getResultArray();
    }

    public function FetchTotalLeads($user_id) {
        $result = $this->employees->select('COUNT(lead_assignments.lead_assignment_user_id) as total_leads')->where('user_id', $user_id)->join('lead_assignments', 'users.user_id = lead_assignments.lead_assignment_user_id', 'left')->get();
        return $result->getResultArray();
    }

    public function FetchNewLeadsDetails($user_id) {
        $result = $this->leads->select("leads.lead_id, leads.lead_client_name, leads.lead_client_phone, projects.project_name, locations.location_name, leads.lead_date, users.user_fullname, departments.department_name, lead_statuses.lead_status_name")->where('user_id', $user_id)->join('leads', 'lead_assignments.lead_assignment_lead_id = leads.lead_id', 'left')->where('lead_assignments.lead_assignment_status_id', 1)->join('projects', 'leads.lead_project_id = projects.project_id', 'left')->join('locations', 'projects.project_location_id = locations.location_id', 'left')->join('users', 'lead_assignments.lead_assignment_user_id = users.user_id', 'left')->join('departments', 'users.user_department_id = departments.department_id', 'left')->join('lead_statuses', 'lead_assignments.lead_assignment_status_id = lead_statuses.lead_status_id', 'left')->orderBy('leads.lead_id', 'DESC')->limit(0, 10)->get();
        return $result->getResultArray();
    }

    public function FetchPendingLeadsDetails($user_id) {
        $result = $this->leads->select("leads.lead_id, leads.lead_client_name, leads.lead_client_phone, projects.project_name, locations.location_name, leads.lead_date, users.user_fullname, departments.department_name, lead_statuses.lead_status_name")->where('user_id', $user_id)->join('leads', 'lead_assignments.lead_assignment_lead_id = leads.lead_id', 'left')->where('lead_assignments.lead_assignment_status_id', 2)->join('projects', 'leads.lead_project_id = projects.project_id', 'left')->join('locations', 'projects.project_location_id = locations.location_id', 'left')->join('users', 'lead_assignments.lead_assignment_user_id = users.user_id', 'left')->join('departments', 'users.user_department_id = departments.department_id', 'left')->join('lead_statuses', 'lead_assignments.lead_assignment_status_id = lead_statuses.lead_status_id', 'left')->orderBy('leads.lead_id', 'DESC')->limit(0, 10)->get();
        return $result->getResultArray();
    }

}