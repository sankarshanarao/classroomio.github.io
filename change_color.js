<script type="text/javascript">
		var seconds=0;
		/*var r=0;
		var b=0;
		var g=0;*/
		var op=0;
		var flag=0;
		var a=document.querySelector("#val");
		function startTimer()
		{
			window.setInterval("updateTime()",10);
		}
		function updateTime()
		{/*
			++seconds;
			if(flag==0)
			{++r;++g;++b;}
			if(r==0 &&g==0 &&b==0)
			{flag=0;}
			if(r==255 &&g==255 &&b==255)
			{flag=1;}
			if(flag==1)
			{--r;--g;--b;}
			document.body.style.backgroundColor ='rgb('+r+','+g+','+b+')';*/
			if(op==1)
				flag=1;
			if(op==0)
				flag=0;
			if(flag==1)
				op-=0.1;
			else
				op+=0.1;
			document.getElementById("moo").style.opacity=op; 
		}
	</script>