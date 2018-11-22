<?php

class DB extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function truncate($table)
    {
        $this->db->truncate($table);
    }

    function checkUserEmail($email, $user_id = '')
    {
        $this->db->select("m.*");
        $this->db->where("email", $email);
        if (!empty($user_id)) {
            $this->db->where("user_id !=", $user_id);
        }
        $query = $this->db->get("tbl_users m");
        if ($query->num_rows() > 0) {
            return true;
        }
        return false;
    }

    function updateUser($pdata, $user_id)
    {
        $this->db->where("user_id", $user_id);
        return $this->db->update("tbl_users", $pdata);
    }

    function update($table, $where, $id, $pdata)
    {
        $this->db->where($where, $id);
        return $this->db->update($table, $pdata);
    }

    function del($table, $where, $id)
    {
        $this->db->where($where, $id);
        return $this->db->delete($table);
    }

    function getUserById($user_id)
    {
        $this->db->select("m.*");
        $this->db->where("m.user_id", $user_id);
        $query = $this->db->get("tbl_users m");
        if ($query->num_rows() > 0) {
            return $query->row_array();
        }
        return false;
    }

    function userLogin($email, $pwd)
    {
        $this->db->select("m.*");
        $this->db->where("email", $email);
        $this->db->where("password", $pwd);
        $query = $this->db->get("tbl_users m");
        if ($query->num_rows() > 0) {
            return $query->row_array();
        }
        return false;
    }

    function add($table, $pdata)
    {
        $this->db->insert($table, $pdata);
        return $this->db->insert_id();
    }

    function updatePost($pdata, $post_id)
    {
        $this->db->where("post_id", $post_id);
        return $this->db->update("tbl_posts", $pdata);
    }

    function updateGallery($pdata, $gallery_id)
    {
        $this->db->where("gallery_id", $gallery_id);
        return $this->db->update("tbl_gallery", $pdata);
    }

    function updateAbout($pdata, $pk_id)
    {
        $this->db->where("pk_id", $pk_id);
        return $this->db->update("tbl_about", $pdata);
    }

    function delPost($post_id)
    {
        $this->db->where("post_id", $post_id);
        return $this->db->delete("tbl_posts");
    }

    function delGallery($gallery_id)
    {
        $this->db->where("gallery_id", $gallery_id);
        return $this->db->delete("tbl_gallery");
    }

    function getGalleryById($gallery_id)
    {
        $this->db->select("m.*");
        $this->db->where("gallery_id", $gallery_id);
        $query = $this->db->get("tbl_gallery m");
        if ($query->num_rows() > 0) {
            return $query->row_array();
        }
        return false;
    }

    function getGalleryBySlug($str)
    {
        $this->db->select("m.*");
        $this->db->where("gallery_slug", $str);
        $query = $this->db->get("tbl_gallery m");
        if ($query->num_rows() > 0) {
            return $query->row_array();
        }
        return false;
    }

    function getAbout()
    {
        $this->db->select("m.*");
        $query = $this->db->get("tbl_about m");
        if ($query->num_rows() > 0) {
            return $query->row_array();
        }
        return false;
    }

    function searchContactRequests($s = array(), $mode = "DATA")
    {
        if ($mode == "CNT") {
            $this->db->select("COUNT(1) as CNT");
        } else {
            $this->db->select("m.*");
        }
        if (!empty($s['is_active']) && ($s['is_active'] == '1')) {
            $this->db->where("m.is_active", $s['is_active']);
        }
        if (isset($s['limit']) && isset($s['offset'])) {
            $this->db->limit($s['limit'], $s['offset']);
        }
        $this->db->group_by("m.contact_request_id");
        $this->db->order_by("m.contact_request_id DESC");
        $query = $this->db->get("tbl_contact_requests m");
        if ($query->num_rows() > 0) {
            if ($mode == "CNT") {
                $row = $query->row_array();
                return $row['CNT'];
            }
            return $query->result_array();
        }
        return false;
    }

    function searchDocuments($s = array(), $mode = "DATA")
    {
        if ($mode == "CNT") {
            $this->db->select("COUNT(1) as CNT");
        } else {
            $this->db->select("m.*");
        }
        if (!empty($s['is_active']) && ($s['is_active'] == '1')) {
            $this->db->where("m.is_active", $s['is_active']);
        }
        if (isset($s['limit']) && isset($s['offset'])) {
            $this->db->limit($s['limit'], $s['offset']);
        }
        $this->db->group_by("m.doc_id");
        $this->db->order_by("m.doc_id DESC");
        $query = $this->db->get("tbl_documents m");
        if ($query->num_rows() > 0) {
            if ($mode == "CNT") {
                $row = $query->row_array();
                return $row['CNT'];
            }
            return $query->result_array();
        }
        return false;
    }

    function getContactRequestById($id)
    {
        $this->db->select("m.*");
        $this->db->where("m.contact_request_id", $id);
        $query = $this->db->get("tbl_contact_requests m");
        if ($query->num_rows() > 0) {
            return $query->row_array();
        }
        return false;
    }

    function getDocumentyId($id)
    {
        $this->db->select("m.*");
        $this->db->where("m.doc_id", $id);
        $query = $this->db->get("tbl_documents m");
        if ($query->num_rows() > 0) {
            return $query->row_array();
        }
        return false;
    }

    function getPostById($post_id)
    {
        $this->db->select("m.*");
        $this->db->where("m.post_id", $post_id);
        $query = $this->db->get("tbl_posts m");
        if ($query->num_rows() > 0) {
            return $query->row_array();
        }
        return false;
    }

    function getPostBySlug($slug)
    {
        $this->db->select("m.*");
        $this->db->where("m.post_slug", $slug);
        $query = $this->db->get("tbl_posts m");
        if ($query->num_rows() > 0) {
            return $query->row_array();
        }
        return false;
    }

    function searchGallery($s = array(), $mode = "DATA")
    {
        if ($mode == "CNT") {
            $this->db->select("COUNT(1) as CNT");
        } else {
            $this->db->select("m.*");
        }
        if (isset($s['limit']) && isset($s['offset'])) {
            $this->db->limit($s['limit'], $s['offset']);
        }
        if (isset($s['is_active']) && !empty($s['is_active'])) {
            $this->db->where("m.is_active", $s['is_active']);
        }
        if (isset($s['category']) && !empty($s['category'])) {
            $this->db->where("m.category", $s['category']);
        }
        if (isset($s['sub_category_id']) && !empty($s['sub_category_id'])) {
            $this->db->where("m.sub_category_id", $s['sub_category_id']);
        }
        if (isset($s['gallery_id']) && !empty($s['gallery_id'])) {
            $this->db->where("m.gallery_id", $s['gallery_id']);
        }
        if (isset($s['gallery_id']) && !empty($s['gallery_id'])) {
            $this->db->where("m.gallery_id", $s['gallery_id']);
        }
        if (isset($s['posted_by']) && !empty($s['posted_by'])) {
            $this->db->where("m.posted_by ", $s['posted_by']);
        }
        $this->db->order_by("m.created_on DESC");
        $this->db->group_by("m.gallery_id");
        $query = $this->db->get("tbl_gallery m");
        // echo $this->db->last_query();
        if ($query->num_rows() > 0) {
            if ($mode == "CNT") {
                $row = $query->row_array();
                return $row['CNT'];
            }
            return $query->result_array();
        }
        return false;
    }
}