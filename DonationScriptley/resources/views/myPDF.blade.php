<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Naturel Recept</title>

<style type="text/css">
	body{
  font-family: sans-serif;
	}
.main {
    width: 72%;
    height: 100%;
    margin: 0 auto;
    margin-top: 37px;
    box-shadow: rgb(100 100 111 / 20%) 0px 7px 29px 0px;
}
.logo {
    width: 10%;
    height: 12%;
}
.header {
    display: flex;
    padding: 10px 33px;
    border-bottom: 2px solid black;
}
.heding{
	width: 100%;
}
.heding h1 {
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 500;
    letter-spacing: 1px;
    margin: 11px;
}
.second-section {
    display: flex;
    justify-content: space-between;
    padding: 0px 33px;
    border-bottom: 2px solid black;
}
.third-section {
    text-align: center;
    border-bottom: 2px solid black;
}
.form {
    padding: 10px 63px;
    font-size: 18px;
    border-bottom: 2px solid black;
}
.form input {
    border: none;
    border-bottom: 1px solid black;
}
.form-row {
    display: flex;
    justify-content: space-between;
    padding: 11px 0px;
}
.Receipt_No {
    width: 60%;
}
.Date {
    width: 40%;
}
.Receipt_No input {
    width: 53%;
}
.Date input {
    width: 75%;
}
.amount_rs{
width: 65%;
}
.amount_words{
width: 35%;
}
.amount_rs input {
    width: 58%;
}
.amount_words input {
    width: 87%;
}
.words input {
	width: 90%;
}
.form-row-third{
	padding: 15px 0px;
}
.name{
	width: 100%;
}
.name input {
    width: 62%;
}
.payment-method p{
	text-align: right;
}
.Address {
    width: 54%;
}
.Address input{
	width: 70%;
}
input.address2 {
    width: 82%;
    padding: 10px;
}
.mob-no {
    padding: 15px 0px;
}
.footer{
	text-align: center;
	padding: 1px;
}
.payment-detail {
    width: 40%;
}
.Details{
	 padding: 10px 0px;
}
.Details input {
    width: 80%;
}
.PAN{
	padding: 10px 0px;
}
.PAN input{
	 width: 86%;
}
.Email_ID{
	padding: 10px 0px;
}
.Email_ID input{
	 width: 77%;
}

</style>
</head>
<body>
	<div class="main">
		<div class="header">
			<img src="logo.png" class="logo">
			<!-- <img src="{{asset('custom/img/logo.png')}}" class="logo"> -->
			<span class="heding"><h1>SEVA NATUREAL FOUNDATION</h1></span>
		</div>
		<div class="second-section">
			<p>CIN: U85100KA2022NPL159269</p>
			<span><p>(Registered under section 8 of companies Act, 2013)</p></span>
		</div>
		<div class="third-section">
			<p>Regd Office: Flast #2, Third Floor, Aayush Kshetra No.7, Industrial Subur, Visweshwar Nagar, Mysore 570008, India.</p>
		</div>
		<div class="form">
			<form>
				<div class="form-row">
					<div class="Receipt_No">
						<label>Receipt No:</label>
						<input type="text" name="Receipt No.">
					</div>
					<div class="Date">
						<label>Date:</label>
						<input type="text" name="Date">
					</div>
				</div>
				<div class="form-row">
					<div class="amount_rs">
						<label>Received A Sum of Rs:</label>
						<input type="text" name="Amount in RS.">/-</input>
					</div>
					<div class="amount_words">
						<input type="text" name="Amount in Words">
					</div>
				</div>
				<div class="form-row-third">
					<div class="words">
						<input type="text" name="Words">(in words)</input>
					</div>
				</div>
				<div class="form-row">
					<div class="name">
						<label>Towards Corpus Fund From Sri/Smt/Ms</label>
						<input type="text" name="Amount in RS."></input>
					</div>
				</div>
				<div>
					<div class="payment-method">
						<p>Payment Mode: Cash/MO/Bank/Elec Tr</p>
					</div>
				</div>
				<div class="form-row">
					<div class="Address">
						<label>Address:</label>
						<input type="text" name="Address">
						<input class="address2" type="text" name="Address">
						<input class="address2" type="text" name="Address">
						<div class="mob-no">
							<label>Mob No:</label>
							<input type="text" name="Mob No">
						</div>
					</div>
					<div class="payment-detail">
						<div class="Details">
							<label>Details:</label>
							<input type="text" name="Details">
						</div>
						<div class="PAN">
							<label>PAN:</label>
							<input type="text" name="PAN">
						</div>
						<div class="Email_ID">
							<label>Email ID:</label>
							<input type="text" name="Email ID">
						</div>
					</div>
				</div>
				<div>
					<div class="payment-method">
						<p>Authorised Representative</p>
					</div>
				</div>
					
			</form>
		</div>
		<div class="footer">
			<p>**Income tax deduction u/s 80G will be available only if the donor provides PAN and Aadhar/Address proof.
The IT Sec 80G - ABICS1239DF20221 issued by Income Tax Department (Date of approval: 12 May 2022)</p>
		</div>
	</div>

</body>
</html>