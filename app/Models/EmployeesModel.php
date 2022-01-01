<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeesModel extends Model {

    /**
     * Called during initialization. Appends
     * our custom field to the module's model.
     */
    protected function initialize()
    {
        $this->db = \Config\Database::connect();
        $this->employees = $this->db->table('users');
        $this->locations = $this->db->table('locations');
        $this->departments = $this->db->table('departments');
        $this->sub_departments = $this->db->table('sub_departments');
        $this->user_roles = $this->db->table('user_roles');
        $this->genders = $this->db->table('genders');
        $this->projects = $this->db->table('projects');
    }
    
    public function FetchEmployees($id = NULL, $perPage = null, $offset = null) {
        $result = NULL;
        
        if ($id != NULL) {
            $result = $this->employees->select('*')->join('departments', 'users.user_department_id = departments.department_id', 'left')->join('sub_departments', 'users.user_sub_department_id = sub_departments.sub_department_id', 'left')->join('user_roles', 'users.user_user_role_id = user_roles.user_role_id', 'left')->join('locations', 'users.user_location_id = locations.location_id', 'left')->join('genders', 'users.user_gender_id = genders.gender_id', 'left')->where('users.user_id', $id)->limit($perPage, $offset)->get();
        } else {
            $result = $this->employees->select('*')->join('departments', 'users.user_department_id = departments.department_id', 'left')->join('sub_departments', 'users.user_sub_department_id = sub_departments.sub_department_id', 'left')->join('user_roles', 'users.user_user_role_id = user_roles.user_role_id', 'left')->join('locations', 'users.user_location_id = locations.location_id', 'left')->join('genders', 'users.user_gender_id = genders.gender_id', 'left')->orderBy('users.user_id', 'DESC')->limit($perPage, $offset)->get();
        }
        
        return $result->getResultArray();
    }

    public function FetchLocations() {
        $result = $this->locations->select('*')->get();

        return $result->getResultArray();
    }

    public function FetchDepartments() {
        $result = $this->departments->select('*')->get();

        return $result->getResultArray();
    }

    public function FetchSubDepartments() {
        $result = $this->sub_departments->select('*')->get();

        return $result->getResultArray();
    }

    public function FetchRoles() {
        $result = $this->user_roles->select('*')->orderBy('user_role_id DESC')->get();

        return $result->getResultArray();
    }

    public function FetchGenders() {
        $result = $this->genders->select('*')->get();

        return $result->getResultArray();
    }

    public function InsertEmployee($data) {
        $result = $this->employees->select('user_email')->where('user_email', $data["user_email"])->get();

        if ($result->getResultArray() == TRUE) {
            return FALSE;
        }

        $result = $this->employees->insert($data);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function UpdateEmployee($id, $data) {
        $result = $this->employees->where('user_id', $id)->update($data);
        
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function EnableEmployee($id, $data) {
        $result = $this->employees->select('user_id')->where('user_id', $id)->get();

        if ($result->getResultArray() == FALSE) {
            return FALSE;
        }

        $result = $this->employees->where('user_id', $id)->update($data);
        
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function DisableEmployee($id, $data) {
        $result = $this->employees->select('user_id')->where('user_id', $id)->get();

        if ($result->getResultArray() == FALSE) {
            return FALSE;
        }

        $result = $this->employees->where('user_id', $id)->update($data);
        
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}