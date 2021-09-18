<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Contato extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'BREVE LANÇAMENTO - BRÁS';
        $data['description'] = 'tons do bras; apartamento bras; apto bras; apto centro sp';
        $data['keywords'] = 'com terraço, 1 vaga, lazer total, 1 dorm, 2 dorm';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_view';

        if ($this->input->post('enviar_email') == "enviar") {
            $nome = $this->input->post('nome');
            $email = $this->input->post('email');
            $telefone = $this->input->post('phone');
            $mensagem = utf8_decode($this->input->post('mss'));
            $assunto = utf8_decode('Contato enviado pelo site www.tonsdobras.com.br');

            $this->load->library('email');
            $config['mailtype'] = 'html';
            $this->email->initialize($config);

            $this->email->from("contato@tonsdobras.com.br", "Tons do Brás");
            $this->email->to('contato@tonsdobras.com.br');
            $this->email->cc('paulobaronista@gmail.com, felipe@vemplan.com.br, leadstonsdobras@gmail.com, renatajsimoes@gmail.com');

            $this->email->subject($assunto);
            $this->email->message("<html xmlns='http://www.w3.org/1999/xhtml' dir='ltr' lang='pt-br'>
            <head> <meta http-equiv='content-type' content='text/html;charset=UTF-8' /> </head><body>
            Nome:		{$nome}<br/>
                E-mail:		{$email}<br/>
                    Telefone:	{$telefone}<br/>
                        Mensagem:	{$mensagem}<br/>
                            </body></html>");

            if ($this->email->send()) {
                redirect('contato/obrigado');
            } else {
                redirect('contato/fail');
            }

            //Sanitize input data using PHP filter_var().
            $user_Name    = filter_var($_POST["nome"], FILTER_SANITIZE_STRING);
            $user_Email   = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
            $user_Phone   = retiraMascara($_POST["phone"]);
            $user_Message = filter_var($_POST["mss"], FILTER_SANITIZE_STRING);
            $user_Subject = filter_var($_POST["Contato enviado pelo site www.tonsdobras.com.br"], FILTER_SANITIZE_STRING);
            $user_Origin  = filter_var($_POST["userOrigin"], FILTER_SANITIZE_STRING);
            $user_UTM     = filter_var($_POST["userUTM"], FILTER_SANITIZE_STRING);

            #//Prepara os dados para o Sigavi\\

            $aDados = array(
                "Referencia" => "1133",
                "Midia" => "Site",
                "Nome" => "$user_Name",
                "Telefone" => "$user_Phone",
                "Email" => "$user_Email",
                "Mensagem" => "$user_Message.Meio de Contato Preferencial: $user_Subject",
                "Campanha" => "$user_UTM",
                "Empreendimento" => true
            );

            $data_string = json_encode($aDados);
            gravaLog("Enviando dados para Sigavi = $data_string", "Maxim_Itu");
            $ch = curl_init("https://vemplan.sigavi360.com.br/Sigavi/api/Leads/NovaLead");
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Content-Length: ' . strlen($data_string)));

            $result = curl_exec($ch);
            curl_close($ch);
            if ((strpos($result, "false") === true) or (trim($result) == "")) {
                $output = json_encode(array('type' => 'error', 'text' => "Não foi possível enviar os dados. Por favor, tente novamente. ($result)"));
                die($output);
            }
            #\\Dados enviados para o Sigavi//

        }

        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function obrigado()
    {
        $data['title'] = 'BREVE LANÇAMENTO - BRÁS';
        $data['description'] = 'tons do bras; apartamento bras; apto bras; apto centro sp';
        $data['keywords'] = 'com terraço, 1 vaga, lazer total, 1 dorm, 2 dorm';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_sucesso';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function fail()
    {
        $data['title'] = 'BREVE LANÇAMENTO - BRÁS';
        $data['description'] = 'tons do bras; apartamento bras; apto bras; apto centro sp';
        $data['keywords'] = 'com terraço, 1 vaga, lazer total, 1 dorm, 2 dorm';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_insucesso';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }
}

/* Location: ./application/controllers/contato.php */
