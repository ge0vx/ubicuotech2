<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {
	public function index()
	{
		$this->sprint();
	}

	public function ubicuotechMain($data){
		$this->load->view("view_head", $data);
		$this->load->view("view_ubicuotech_main2");
		$this->load->view("view_contact");
		$this->load->view("view_footer");
	}

	public function ubicuotechsprint($data){
		$this->load->view("view_head_sprint", $data);
		$this->load->view("view_ubicuotech_sprint");
		$this->load->view("view_contact");
		$this->load->view("view_footer_sprint");
	}

	public function formpage($data){
		$this->load->view("view_head", $data);
		
		$this->load->view("view_sticky_menu1_copy1");
		$this->load->view("view_absolute_menu_copy1");
		$this->load->view("view_formwizard");
	}

	public function formpage_es($data){
		$this->load->view("view_head", $data);
		
		$this->load->view("view_sticky_menu1_copy1");
		$this->load->view("view_absolute_menu_copy1");
		$this->load->view("view_formwizard_es");
	}

	public function sprint(){
		$this->load->model("Model_get");
		$data["results"] = $this->Model_get->getData('es');
		$this->ubicuotechsprint($data);
	}

	public function en(){
		$this->load->model("Model_get");
		$data["results"] = $this->Model_get->getData('en');
		$this->ubicuotechMain($data);
	}

	public function es(){
		$this->load->model("Model_get");
		$data["results"] = $this->Model_get->getData('es');
		$this->ubicuotechMain($data);
	}

	public function du(){
		$this->load->model("Model_get");
		$data["results"] = $this->Model_get->getData('du');
		$this->ubicuotechMain($data);
	}

	public function fr(){
		$this->load->model("Model_get");
		$data["results"] = $this->Model_get->getData('fr');
		$this->ubicuotechMain($data);
	}

	public function form(){
		$this->load->model("Model_get");
		$data["results"] = $this->Model_get->getData('en');
		$this->formpage($data);
	}

	public function form_es(){
		$this->load->model("Model_get");
		$data["results"] = $this->Model_get->getData('es');
		$this->formpage_es($data);
	}

	public function recibeform(){
		function ReadtextFile($FileName){
			if (file_exists($FileName) )
				{
				$file_size = filesize($FileName);
				if ($file_size == 0) return "";
				}
			else return "-1";

			if (!$fp = fopen($FileName, "r")) return "-1";

			$s01 = fread($fp, filesize($FileName));
			fclose($fp);

			return $s01;
		}
		
		$data = $this->input->post('data');
		
		$my_file = FCPATH."assets/datos.txt";
		$data_to_write = $data["data"];
		
		
		if (!file_exists($my_file)) {
			$res = 'File not found';
		}else if(!$fh = fopen($my_file, 'rb')) {
			$res = 'Can\'t open file';
		}else {
			$res = 'Success open file';
			if ($fh) {
				$file_content = ReadtextFile( $my_file );
				$new_text = $file_content . $data_to_write;
				$fh2 = fopen($my_file, 'w');
				if(!fwrite($fh2, $new_text)){
					$res = 'Can\'t write file';
				}
			}
			fclose($fh);
		}
		//echo json_encode($data_to_write);
		echo json_encode($this->phpmailer($data_to_write));
	}

	function phpmailer($data_to_write){
		$arraytext = (explode("&",$data_to_write));
		$text_procd = "";
		$rowbody = "";

		
		foreach($arraytext as $item) {
			$text_procd.= $item."=";
		}

		$arraytext = (explode("=",$text_procd));
		foreach($arraytext as $key=>$item) {
			$rowbody.= "<td style='border:1px solid #666; padding:0.5em 1em'>".$item."</td>";
			if(($key%2) == 1){
				$rowbody.= "</tr><tr>";
			}
		}

		$rtable = '<table cellspacing="0" style="border: 1px solid #333"><tbody><tr >'.$rowbody.'</tr></tbody></table>';
		$rtable = str_replace("_"," ",$rtable);
		$rtable = str_replace("%40","@",$rtable);
		$rtable = str_replace("+"," ",$rtable);
		
		$this->load->library("PHPMailer_Library");
        $mail = $this->phpmailer_library->load();
		try {
		    $mail->isSMTP();
				$mail->SMTPDebug = 2;
				$mail->Host = 'smtp.zoho.com';
				$mail->Port = 465;
				$mail->SMTPSecure = 'ssl';
				$mail->SMTPAuth = true;
				$mail->Username = "administrador@ubicuotech.mx";
				$mail->Password = "T3CHubicu0+.zo";

				$mail->setFrom('administrador@ubicuotech.mx', 'Ubicuotech Encuesta (no-reply)');
				/*eorozco@ubicuotech.com*/
				$mail->addAddress('eorozco@ubicuotech.com', 'Efrain Orozco');
				//$mail->addAddress('geovapb@gmail.com', 'Giovany');
				$mail->addAddress('giovany@ubicuotech.mx', 'Giovany');
				$mail->Subject = 'UbicuoTech Encuesta';
				$mail->Body    = '<h4><strong>Resutados de Encuesta</strong></h4><br/>'.$rtable;
				$mail->AltBody = $text_procd;
				if (!$mail->send()) {
					return "Mailer Error: " . $mail->ErrorInfo;
				} else {
					return 1;
				}
		} catch (Exception $e) {
		    return 'Message could not be sent.';
		    return 'Mailer Error: ' . $mail->ErrorInfo;
		}
		
	}
}
