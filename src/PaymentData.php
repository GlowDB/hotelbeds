<?php namespace StayForLong\HotelBeds;


use StayForLong\HotelBeds\Contracts\PaymentDataInterface;

final class PaymentData implements PaymentDataInterface
{
	const CARD_NUMBER = "cardNumber";
	const CARD_HOLDER_NAME = "cardHolderName";
	const CARD_EXP_DAY = "expiryDate";
	const CARD_CVC = "cardCVC";
	const CARD_TYPE = "cardType";

	const CONTACT_EMAIL = "email";
	const CONTACT_PHONE_NUMBER = "phoneNumber";

	private $payment_data = [];
	private $contact_data = [];

	public function setCardType($a_card_type)
	{
		$this->payment_data['cardType'] = $a_card_type;
	}

	public function setCardNumber($a_card_number)
	{
		$this->payment_data[self::CARD_NUMBER] = $a_card_number;
	}

	public function setHolderCardName($a_holder_card_name)
	{
		$this->payment_data[self::CARD_HOLDER_NAME] = $a_holder_card_name;
	}

	public function setExpirationDate($a_expiration_date)
	{
		$this->payment_data[self::CARD_EXP_DAY] = $a_expiration_date;
	}

	public function setCardCVC($a_card_cvc)
	{
		$this->payment_data[self::CARD_CVC] = $a_card_cvc;
	}

	public function setEmail($an_contact_email)
	{
		$this->contact_data[self::CONTACT_EMAIL] = $an_contact_email;
	}

	public function setPhoneNumber($a_contact_phone)
	{
		$this->contact_data[self::CONTACT_PHONE_NUMBER] = $a_contact_phone;
	}

	public function getPaymentCard()
	{
		return $this->payment_data;
	}

	public function getContactData()
	{
		return $this->contact_data;
	}

	public function getPaymentData()
	{
		if(empty($this->payment_data)){
			return [];
		}

		return [
			'paymentCard' => $this->payment_data,
			'contactData' => $this->contact_data,
		];
	}
}