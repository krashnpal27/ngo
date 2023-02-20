<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Recept</title>
</head>
<body style="margin:0px !important; padding:0px !important">
	<div style=" width: 100%;height: 100%;margin: 0 auto;margin-top: 37px;box-shadow: rgb(100 100 111 / 20%) 0px 7px 29px 0px;">
		<div style="padding: 10px 33px;border-bottom: 2px solid black;">
			<img src="{{$image}}" style=" width: 10%;height: 12%;">
			<span style="width: 100%;"><h1 style=" text-align: center;margin-top: -51px !important;margin-left: 93px !important;font-weight: 500;letter-spacing: 1px;margin: 11px;">SEVA NATUREAL FOUNDATION</h1></span>
		</div>
		<div style="padding: 0px 33px;border-bottom: 2px solid black;">
			<p><b> CIN: U85100KA2022NPL159269 </b></p>
			<span style="text-align: right;"><p style="margin-top: -36px;"><b>(Registered under section 8 of companies Act, 2013)</p></span>
		</div>
		<div style=" text-align: center;border-bottom: 2px solid black;">
			<p><b>Regd Office: Flast #2, Third Floor, Aayush Kshetra No.7, Industrial Subur, Visweshwar Nagar, Mysore 570008, India.</b></p>
		</div>
		<div style="padding: 10px 40px;font-size: 18px;border-bottom: 2px solid black;">
			<form>
				<div style="padding: 11px 0px;">
					<div style="width: 60%;">
						<label><b>Receipt No:</b></label>
						<input style="text-align: center; border: none;border-bottom: 1px solid black;width: 53%;" type="text" name="Receipt No." value="{{$data->receipt_no}}">
					</div>
					<div style="width: 40%;float: right;margin-top: -21px;">
						<label><b>Date:</b></label>
						<input style="text-align: center; border: none;border-bottom: 1px solid black;width: 75%;" type="text" name="Date" value="{{$data->created_at}}">
					</div>
				</div>
				<div style="padding: 11px 0px;">
					<div style="width: 65%;">
						<label><b>Received A Sum of Rs:</b></label>
						<input style="text-align: center; border: none;border-bottom: 1px solid black;width: 50%;" type="text" name="Amount in RS."  value="{{$data->amount}}">/-</input>
					</div>
					<div style="width: 35%;float: right;margin-top: -21px;">
						<input style="text-align: center; border: none;border-bottom: 1px solid black;width: 87%;" type="text" name="Amount in Words" >
					</div>
				</div>
				<div style="padding: 15px 0px;">
					<div>
						<input style="text-align: center; border: none;border-bottom: 1px solid black;width: 90%;" type="text" name="Words" value="{{ucfirst($data->amount_words)}}">(in words)</input>
					</div>
				</div>
				<div style="padding: 11px 0px;">
					<div style="width: 100%;">
						<label><b>Towards Corpus Fund From Sri/Smt/Ms:</b></label>
						<input style=" border: none;border-bottom: 1px solid black;width: 62%;" type="text" name="Amount in RS." value="{{$data->fname}} {{$data->lname}}"></input>
					</div>
				</div>
				<div>

				</div>
				<div style="padding: 11px 0px; width:100%; margin-top:2%">
					<div style="width: 50%; float:left;">
							<label><b>Address:</b></label>
							<input style="text-align: center; border: none;border-bottom: 1px solid black;width: 70%;" type="text" name="Address"  value="{{$data->address_line1}},{{$data->address_line2}},{{$data->city}}">
						
							<input style="text-align: center; border: none;border-bottom: 1px solid black; width: 82%;padding: 10px;" type="text" name="Address" value="{{$data->address_line2}}">
						
							<input style="text-align: center; border: none;border-bottom: 1px solid black; width: 82%;padding: 10px;" type="text" name="Address"  value="{{$data->city}}">
						<div style=" padding: 15px 0px;">
							<label><b>Mob No:</b></label>
							<input style="text-align: center; border: none;border-bottom: 1px solid black;width: 71%;" type="text" name="Mob No"  value="{{$data->phone}}">
						</div>
					</div>

					<div style="width:50%; float:right">
						<div style="">
							<div>
								<p style="">
								<label><b>Payment Mode:</b></label>
								{{$data->payment_by}}</p>
							</div>
							<div style="padding: 10px 0px;">
								<label><b>Details:</b></label>
								<input style="text-align: center; border: none;border-bottom: 1px solid black;width: 80%;" type="text" name="Details"value="{{$data->cheque_no?$data->cheque_no:'cash'}}">
							</div>
							<div style="padding: 10px 0px;">
								<label><b>PAN:</b></label>
								<input style="text-align: center; border: none;border-bottom: 1px solid black;width: 70%;" type="text" name="PAN" value="{{$data->pan}}">
							</div>
							<div style="padding: 10px 0px;">
								<label><b>Email ID:</b></label>
								<input style="text-align: center; border: none;border-bottom: 1px solid black; width: 77%;" type="text" name="Email ID" value="{{$data->email}}">
							</div>
						</div>
					</div>
				</div>
				<div style="text-align: right; width:100%">
					<p style="text-align: right;">Authorised Representative</p>
				</div>

					
			</form>
		</div>
		<div style="text-align: center;padding: 1px 40px;">
			<p>**Income tax deduction u/s 80G will be available only if the donor provides PAN and Aadhar/Address proof.
The IT Sec 80G - ABICS1239DF20221 issued by Income Tax Department (Date of approval: 12 May 2022)</p>
		</div>
	</div>
</body>
</html>