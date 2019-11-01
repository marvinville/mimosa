<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mimosa extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// $this->load->library('binlib');

		// $username = 'mimosa123';
		// $password = 'mimosa123';
		// $url = 'https://192.168.1.20/core/api/service/status?username='.$username.'&password='.$password;

		// $ch = curl_init();

        // curl_setopt($ch, CURLOPT_URL, $url);
		// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        // curl_setopt($ch, CURLOPT_HEADER, true);
        // curl_setopt($ch, CURLOPT_POST, true);

        // if($header)
        // curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

        // if($body)
        // curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

		// $result = curl_exec($ch);
		
		// $file = fopen("test.txt","a+");
		// echo fwrite($file, $result);
		// fclose($file);

        // // curl_close($ch);

		// var_dump($result);

		header('Content-Type: application/xml');		

		$result = '<?xml version="1.0" encoding="UTF-8"?>
		<response status="ok">
		   <mimosaContent>
			  <values>
				 <SignalStrength>-34.6</SignalStrength>
				 <TxRate>650</TxRate>
				 <RxRate>520</RxRate>
				 <Noise>-85.524</Noise>
				 <Chains_1_2 />
				 <Chains_3_4 />
				 <Tx_Power>257</Tx_Power>
				 <Tx_Phys_Rate>650</Tx_Phys_Rate>
				 <Rx_Phys_Rate>520</Rx_Phys_Rate>
				 <Rx_MCS>5</Rx_MCS>
				 <Details>
					<_ELEMENT index="1">
					   <Tx />
					   <Rx />
					   <Noise>-25.9</Noise>
					   <Encoding />
					</_ELEMENT>
					<_ELEMENT index="2">
					   <Tx />
					   <Rx />
					   <Noise>-18.2</Noise>
					   <Encoding />
					</_ELEMENT>
					<_ELEMENT index="3">
					   <Tx />
					   <Rx />
					   <Noise>0.000000</Noise>
					   <Encoding />
					</_ELEMENT>
					<_ELEMENT index="4">
					   <Tx />
					   <Rx />
					   <Noise>0.000000</Noise>
					   <Encoding />
					</_ELEMENT>
				 </Details>
				 <Noise2 />
			  </values>
			  <errors />
		   </mimosaContent>
		   <mimosaStatus>
			  <status>0</status>
			  <message>Command succeeded</message>
		   </mimosaStatus>
		</response>
		 ';

		 $xml = new SimpleXMLElement($result);
		echo $xml->asXML();

		// $result = $this->binlib->apiRequest($url);
		
	}
}