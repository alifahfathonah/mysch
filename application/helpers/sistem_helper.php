<?php 

    function check_login(){
        $ci = &get_instance();
        if($ci->session->userdata('userid') == null){
            $ci->session->set_flashdata('warning', "Harap Login Untuk Mengakses !");
            redirect('auth');
        }
    }

    function check_status(){
        $ci = &get_instance();
        $query = $ci->db->get('tb_sistem')->row();
        if($query->mode_sistem == 2){
            redirect('status/maintenance');
        }
    }

    function browser()
    {
        $ci = &get_instance();
        if ($ci->agent->is_browser()){
            $agent = $ci->agent->browser().' '.$ci->agent->version();
        }elseif ($ci->agent->is_mobile()){
            $agent = $ci->agent->mobile();
        }
        return $agent;
    }

    function mac_add()
    {
        //Cara mudah dan sederhana mendapatkan mac address  
        // Turn on output buffering  
        ob_start();  
        //mendapatkan detail ipconfing menggunakan CMD  
        system('ipconfig /all');  
        // mendapatkan output kedalam variable  
        $mycom=ob_get_contents();  
        // membersihkan output buffer  
        ob_clean();  
        $findme = "Physical";  
        // mencari perangkat fisik | menemukan posisi text perangkat fisik  
        //Search the "Physical" | Find the position of Physical text  
        $pmac = strpos($mycom, $findme);  
        // mendapatkan alamat peragkat fisik  
        $mac=substr($mycom,($pmac+36),17);  
        //menampilkan Mac Address  
        return $mac;  
    }

    function visitor(){
        $ci = &get_instance();
        $ci->load->helper('string');
        $ci->load->model('msc_m');
        $browser = browser();
        $mac = mac_add();

        if (!isset($_COOKIE['VISITOR'])) {
            $duration = time()+60*60*24;
            setcookie('VISITOR', $browser, $duration);
            $ci->msc_m->insert_viwer($browser, $mac);
        }
    }

    function read_krisar()
    {
        $ci = &get_instance();
        $params['status_krisar'] = 1;
        $ci->db->where('status_krisar',0);
        $ci->db->update('tb_krisar', $params);
    }
?>