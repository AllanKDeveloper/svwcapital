<?php
class Login_model extends CI_Model
{
    function can_login($email, $password)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('clients');
        if($query->num_rows() > 0)
        {
            foreach($query->result() as $row)
            {
                if($row->is_email_verified == 'yes')
                {
                    $store_password = $this->encrypt->decode($row->password);
                    if($password == $store_password)
                    {
                        $data['id'] =  $row->id;
                        $data['name'] =  $row->name;
                        if ($row->is_admin == true) {
                            $data['admin'] = true;
                        }
                        $this->session->set_userdata($data);
                    }
                    else
                    {
                        return 'Insira um endereço de email e/ou senha válidos.';
                    }
                }
                else
                {
                    return 'Sua conta não está verificada';
                }
            }
        }
        else
        {
            return 'Insira um endereço de email e/ou senha válidos.';
        }
    }
}

?>