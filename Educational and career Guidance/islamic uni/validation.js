function validate()
{
	
	var alphabet = /^[a-zA-Z]+$/;
	var num = /^[0-9]+$/;
	var numalpha = /^[0-9a-zA-Z]+$/;
	var numhypen = /^[0-9-]+$/;
	
	valid = true;
	
	if(trim($("#name").val())=="")
	
	{
		alert("Please enter some name");
		$("#name").focus();
		return valid=false;
		
	}
	
	if(!( alphabet .test($("#name").val())))<!--this is used for unformated value of user-->
	{
		alert("Please enter a valid name ");
		$("#name").focus();
		return valid=false;
	}
	
	if(trim($("#address").val())=="")
	
	{
		alert("Please enter your address");
		$("#address").focus();
		return valid=false;
		
	}
	
	if(!( alphabet .test($("#address").val())))<!--this is used for unformated value of user-->
	{
		alert("please enter a valid address ");
		$("#address").focus();
		return valid=false;
	}
	
		 if (!$("input[name='gender']").is(":checked"))
			{
				alert ( "Please Select your gender" );
				return valid=false;
			}
		 if(!$("input[name='teacher']").is(":checked"))
			{
				alert("Please click checkbox");
				return valid=false;
			
			}
	
 return valid;
		
	}	
	
function trim(str, chars) 
		{
			return ltrim(rtrim(str, chars), chars);
		}
 
	function ltrim(str, chars) 
		{
			chars = chars || "\\s";
			return str.replace(new RegExp("^[" + chars + "]+", "g"), "");
		}
	 
	function rtrim(str, chars) 
		{
			chars = chars || "\\s";
			return str.replace(new RegExp("[" + chars + "]+$", "g"), "");
		}


	function IsAllSpaces(myStr)
		{
			while (myStr.substring(0,1) == " ")
			{
					myStr = myStr.substring(1, myStr.length);
			}
			if (myStr == "")
			{
					return true;
			}
			return false;
   }
	