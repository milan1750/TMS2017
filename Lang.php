<?php

class Lang extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function nepali()
	{
		return array(
			'addpayer' => 'नयाँ करदाता',
			'payer_detail' => 'करदाताकाे विवरण',
			'taxdetail' => 'करकाे विवरण',
			'payer_name' => 'करदाताकाे नाम',
			'payer_address' => 'टाेलकाे नाम',
			'payer_contact' => 'करदाताकाे सम्पर्क नम्बर',
			'payer_citizenship' => 'करदाताकाे नागरिकता नम्बर',
			'save' => 'सुरक्षित गर्नुहाेस',
			'payer_name_error' => 'करदाताकाे नाम अावस्यक छ*',
			'payer_ward_error' => 'करदाताकाे वडा नम्बर अावस्यक छ*',
			'payer_address_error' => 'करदाताकाे ठेगाना अावस्यक छ*',
			'payer_contact_error' =>'करदाताकाे समपर्क नम्बर अावस्यक छ*',
			'payer_citizenship_error' =>'करदाताकाे नागरिक्ता नम्बर अावस्यक छ*',
			'payer_district_error' =>'जिल्ला अावस्यक छ*',
			'payer_mun_error' =>'स्थानीय तहकाे नाम अावस्यक छ*',
			'payer_ward' => 'वडा नं',
			'payer_district' => 'जिल्ला',
			'payer_mun' => 'स्थानिय तहकाे नाम',
			'outside_rm' => 'गाउँपािलका बाहिर  ठेगाना भएकाे',
			'one_1' => '१ न‌ं वडा बासखर्क',
			'one_2' => '२ नं वडा माझफाँट',
			'one_3' => '३ नं वडा माझफाँट',
			'one_4' => '४ नं वडा माझफाँट',
			'one_5' => '५ नं वडा लेखफाँट',
			'one_6' => '६ नं वडा शालिजा',
			'one_7' => '७ नं वडा धार्इरिङ्ग',
			'one_8' => '८ नं वडा नाग्लीबाङ्ग',
			'one_9' => '९ नं वडा बनाै',
			'processing_form_submit' => 'तपार्इले पेश गर्नुभएकाे तथ्याङ्क सिस्टममा सुरक्षित हुदै छ ।',
			'inserted_date' =>'पेश गरेकाे मिति',
			'generated_id' =>'करदाताकाे परिचय नम्बर',
			'ok' =>'ठीक छ',
			'edit' =>'सच्याउनुहाेस',
			'check' => 'करदाताकाे विवरण रुजु गर्नुहाेस',
			'updated_date' => 'तत्थ्याङ्क परीवर्तन गरेकाे मिति',
			'choose_district' => 'जिल्ला छनाेट गर्नुहाेस',
			'choose_local_gov' => 'स्थानिय तह छनाेट गर्नुहाेस',
			'choose_ward' => 'वडा छनाेट गर्नुहाेस',
			'payer_district' => 'जिल्ला',
			'payer_local_gov' => 'स्थानीय तहकाे',
			'tax_payer_detail' => 'करदाताकाे विवरण',
			'new_tax_payer'		=> 'नयाँ करदाता',
			'updatepayer' => 'करदाताकाे विवरण सच्याउनुहाेस',
			'vdcandward' =>'साविक गाविस र वडा',
			'vdc' => 'साविक गा.वि.स ',
			'vdc_ward' => 'गा.वि.स. काे वडा',
			'reg_no' =>'कित्ता नं',
			'area' => 'क्षेत्रफल',
			'road' => 'सडककाे नाम/जग्गाकाे प्रकार',
			'type' => 'क्षेत्र',
			'price' => 'जम्मा कर रकम',
			'p_ward' => 'हालकाे वडा',
			'land_price' => 'जग्गाकाे मूल्य',
			'land_rate' => 'प्रती राेपनि मूल्य',
			'add_new' => 'नयाँ थप्नुहाेस',
			'sn' => 'क्र सं',
			'location' => 'ठेगाना',
			'vdc_ward' => 'साविक वडा',
			'cancel' => 'रद्द गर्नुहाेस',
			'print' => 'प्रिन्ट गर्नुहाेस',
			'land' => 'जग्गाकाे विवरण',
			'home' =>'घरकाे विवरण',
			'home_type' => 'संरचनाकाे प्रकार',
			'floor' =>'तला',
			'length' =>'लम्वार्इ',
			'breadth' => 'चौडार्इ',
			'constructed_date' =>'बनेकाे मिति',
			'home_kind' =>'संरचना बनाेटकाे किसिम',
			'home_use' =>'संरचनाकाे प्रयाेग',
			'home_user' => 'प्रयाेगकर्ता',
			'remark' =>'कैफियत',
			'assets' => 'संरचनाकाे',
			'tax_paid_year' => 'कर बुझाएकाे अा.व.',
			'bill_no' => ' रसिद नं.',
			'received_date' => 'बझेकाे मिति',
			'account_no' => 'खातापाना नं.',
			'payer_id' => 'करदाताकाे परिचयपत्र नं.',
			'land_detail' =>'जग्गाकाे विवरण',
			'land_price' =>'जग्गाकाे मूल्य',
			'home_detail' =>'भाौतिक संरचनाकाे विवरण',
			'home_price' => 'संरचनाकाे मूल्य',
			'total_price' => 'सम्पतिकाे मूल्य',
			'b_kind' => 'प्रकार',
			'b_floor' =>'तल्ला',
			'b_type' => 'किसिम',
			'b_use' =>'प्रयाेग',
			'g_land_total' => 'जग्गाकाे जम्मा मूल्य',
			'g_home_total' => 'संरचनाकाे जम्मा मूल्य',
			'agg_tax' =>'सम्पति तथा भूमि कर जम्मा मूल्य',
			'agg_tax_pay' =>'सम्पति तथा भूमि कर',
			'fine' =>'जरिवाना',
			'debt' =>'बक्यौता',
			'add_tax' => 'अन्य शुल्क',
			'discount'=>'छुट',
			'g_total' =>'कुल जम्मा',
			'letter' =>'अक्षरुपी',
			'receiver' => 'रकम बुझिलिनेकाे सही',
			'tax_desc'=>'कर तिरेकाे विवरण',
			'date' =>'मिति',
			'depositer_name' => 'कर तिर्ने व्यक्तिकाे नाम',
			'bill' =>'विल भरपार्इ',
			'deposited_amount' =>'जम्मा रकम',
			'particular' => 'विवरण',
			'copy' => 'प्रतिलिपी',
			'fy' => 'आर्थीक वर्ष',
			'print_bill' => 'काे  नगदी रसिद प्रिन्ट गर्नुहाेस',
			'print_bill_preview' => 'को नगदि रसिद विवरण हेर्नुहोस',
			'tax_info' => 'कृपया अर्को पटक कर तिर्न आउदा याे रसिद साथमा लिएर आउनुहाेला',
			'authority' => 'राजश्व शाखा',
			'sign' => 'बुझिलिनेकाे सही',
			'tax_bill_paid' => 'काे सम्पति तथा भुमि कर',
			'data' => 'तत्थ्याङ्क',


			/* Stats */

 
			'total_payer' => 'जम्मा करदाताकाे संख्या',
			'total_lands' => 'जम्मा जग्गाकाे संख्या',
			'total_homes' => 'जम्मा घर संख्या',
			'total_payer_tax_paid' =>'मा कर तिरेका करदाताकाे संख्या',
			'total_tax_collected' => 'मा उठेकाे  कर',
			'dashboard' => 'ड्यासबोर्ड',

			/*Admin Manage*/
			'manage' => 'सेटीङ्ग',
			'manage_area' => 'क्षेत्र',
			'manage_depn' =>'ह्रासकट्टी दर निर्धारण',
			'manage_discount_month' => 'छुट प्रतिशत निर्धारण',
			'manage_fine' => 'जरीवाना प्रतिशत निर्धारण',
			'manage_home_kind' => 'संरचनाकाे किसिम',
			'manage_home_type' => 'संरचनाकाे प्रकार',
			'manage_home_use' => 'संरचनाकाे प्रयाेग',
			'manage_road_type' => 'सडक र क्षेत्र',
			'manage_system' => 'सिस्टम',
			'manage_tax_rate' => 'कर दर निर्धारण',
			'manage_vdc' => 'गाविस',
			'manage_user' => 'प्रयाेगकर्ता',


			'system_name' => 'गाउँपािलकाकाे नाम',
			'office_name' => 'कार्यालयकाे नाम',
			'email' => 'र्इमेल ठेगाना',
			'total_ward' => 'जम्मा वडा संख्या',
			'loginfo' => 'लगिन सूचना',
			'started_fy' => 'कर संकलन सुरु भएकाे अा.व.',
			'username' => 'प्रयाेगकर्ताकाे नाम',
			'status' => 'डाटा काे अवस्था',
			'father' => 'बावु वा पतिकाे नाम',
			'gf' => 'बाजे वा शसुराकाे नाम',
			'total_reg' => 'जम्मा कित्तकाे संख्या',
			'add_user' => 'नयाँ प्रयाेगकर्ता थप्नुहाेस',
			'password' => 'पासवर्ड राख्नुहाेस',
			're_password' => 'पासवर्ड पुन राख्नुहाेस',
			'land_price_unit' => 'प्रतिराेपनी जग्गाकाे मूल्य',
			'manage_rate' => 'दर निर्धारण',
			'working' => 'दर निर्धारण माेडुल बन्दै छ ।',
			'identity_number' => 'सडक वा क्षेत्रकाे परिचय नं.',
			'home_made' => 'संरचनाकाे बनाेट',
			'kind' => 'जग्गाकाे प्रकार',


			'addpayerinfo' => 'नयाँ करदाताको विवरण यहाँ भर्नुहाेस',
			'dday' => 'गते',
			're_try' => 'पुन प्रयास गर्नुहाेस',
			'tax_particular' => 'काे बक्यौता कर रकम र जरिवानाकाे विवरण',
			'transaction_details' => 'संकलित करको विवरण',
			'user_detail' => 'प्रयोगकर्ताको विवरण',
			'total_payer_inserted' =>' करदाताको र्इन्ट्री संख्या',
			'total_reg_inserted'=>' कित्ताकाे र्इन्ट्री संख्या',
			'total_home_inserted' =>' सम्रचनाको र्इन्ट्री संख्या',
			'total_tax_collected' =>'जम्मा संचित कर',
			'welcome' => 'Tax Management System मा तपाँइलार्इ स्वागत छ ।',
			'add_debt' => '  मालपोतको वक्याैता र जरीवाना रकम थप्नुहाेस',
			'old_debt' => 'मालपोत काे वक्याैता रकम र जिरवाना रकम वापत लागेकाो शुल्क',
			'kind_info' => 'नोट - भौतिक संरचनाकाे बनोटको किसिम काे संकेत नं को व्याख्या',
			'home_bill_kind' => 'किसिम',
			'home_bill_area' => 'क्षेत्रफल (वर्गफिट)',
			'manage_local_gov' => 'स्थानिय तह',
			'district' => 'जिल्ला',
			'land_location' => 'जग्गा रहेको स्थान',





			//Generation payer details in excel file

			'p_id' => 'परिचय पत्र नं',
			'p_district' =>'निल्ला',
			'p_mun' =>'स्थानिय तह',
			'p_ward_o' =>'वडा',
			'p_name' =>'नाम',
			'p_f_name' =>'बावुको नाम',
			'p_g_name' =>'बाजेको नाम',
			'p_c_number' =>'फोन नं',
			'p_l_price' =>'जग्गाकाे मूल्य',
			'p_h_price'=>'संरचनाकाे मूल्य',
			'p_t_price' =>'जम्मा',
			'p_t_tax'=>'कर रकम',
			'p_remark'=>'कैफियत',
			'preview' => 'नमुना नगदि रसिद',





			//Delete Confirm
			'confirm_delete' => 'के तपाई तत्थ्याङ्क हटाउन निश्चित हुनुहुन्छ ?',
			'confirm_delete_info' => 'नोट - हटाईएको तत्थ्याङ्क पुनः प्राप्त गर्न सकिने छैन',

			'remove_land_prev' => 'के तपाई कित्ता नं.',
			'remove_land_next' => 'लाई हटाउन चाहनुहुन्छ ?',
			'remove_transaction' => 'के तपाई यो कारोवार लाई हटाउन चाहनुहुन्छ ?'

		);
	}
}
