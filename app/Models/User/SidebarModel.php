<?php

namespace App\Models\User;

use CodeIgniter\Model;

class SidebarModel extends Model {

    /**
     * Called during initialization. Appends
     * our custom field to the module's model.
     */
    protected function initialize()
    {
        $this->db = \Config\Database::connect();
        $this->employees = $this->db->table('users');
    }

    public function FetchNewLeads($user_id) {
        $result = $this->employees->select('COUNT(lead_assignments.lead_assignment_user_id) as total_new_leads')->where('user_id', $user_id)->join('lead_assignments', 'users.user_id = lead_assignments.lead_assignment_user_id AND lead_assignments.lead_assignment_status_id = 1', 'left')->get();
        return $result->getResultArray();
    }

}