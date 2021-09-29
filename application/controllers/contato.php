<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Contato extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Village Manaca';
        $data['description'] = 'O seu melhor passeio está pertinho de São Paulo.';
        $data['keywords'] = 'village, manaca, são paulo, fazenda boa vista';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_view';

        if($this->input->post('enviar_email') == "enviar"){
            $nome = $this->input->post('nome');
            $email = $this->input->post('email');
            $telefone = $this->input->post('phone');
            $mensagem = utf8_decode($this->input->post('mss'));
            $assunto = utf8_decode('Contato enviado pelo site www.villagemanaca.com.br');

            $this->load->library('email');
            $config['mailtype'] = 'html';
            $this->email->initialize($config);

            $this->email->from("contato@villagemanaca.com.br","Village Manaca");
            $this->email->to('contato@villagemanaca.com.br');
            $this->email->cc('mv_cp_94f_300_1828_3079_14166_71290_3535_3535_faleconosco_hotsiteempreendimento@email.anapro.com.br, contato@nrvillagemanaca.com.br, front.baronista@gmail.com, renata@spicycomm.com.br');
            $this->email->subject($assunto);
            $this->email->message("<html xmlns='http://www.w3.org/1999/xhtml' dir='ltr' lang='pt-br'>
            <head> <meta http-equiv='content-type' content='text/html;charset=UTF-8' /> </head><body>
            Nome:		{$nome}<br/>
                E-mail:		{$email}<br/>
                    Telefone:	{$telefone}<br/>
                        Mensagem:	{$mensagem}<br/>
                            </body></html>");

            if($this->email->send()){
                redirect('contato/obrigado');
            }else{
                redirect('contato/fail');
            }

        }

        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function obrigado(){
        $data['title'] = 'Village Manaca';
        $data['description'] = 'O seu melhor passeio está pertinho de São Paulo.';
        $data['keywords'] = 'village, manaca, são paulo, fazenda boa vista';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_sucesso';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function fail(){
        $data['title'] = 'Village Manaca';
        $data['description'] = 'O seu melhor passeio está pertinho de São Paulo.';
        $data['keywords'] = 'village, manaca, são paulo, fazenda boa vista';
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
