			
			function createXhr(){
				var xhr=null;
				if(window.XMLHttpRequest){
					xhr=new XMLHttpRequest();
				}else{
					xhr=new ActiveXObject("Microsoft.XMLHTTP");
				}
				return xhr;
			}
			function ajax1(url,method,data,async,sucess,error){
				var xhr=createXhr();
				method=method=='post'?'post':'get';
				async=async=='true'?'true':'false';
				if(method=='get'){
					url=url+'?'+data;
				}
				
				xhr.open(method,url,async);
				
				if(method=='post'){
					xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
				}
				
				xhr.onreadystatechange=function(){
					if(xhr.readyState==4){
						if(xhr.status==200){
							var data=xhr.responseText;
							sucess(data);
							}else{
								error();
							}
						}
				}
				xhr.send(data);
			}
			
			//传过来的data数据的样子
			//data={"type":"post","url":"new_file.php",data:null,async:true,fn,fn};
			
			function ajax2(data){
				console.log(typeof data) //object
				var xhr=createXhr();
				var type=data.type=='get'?'get':'post';
				var async=data.async=='true'?'true':'false';
				var url;
				if(data.url){
					url=data.url;
				}
				if(type=='get'){
					url=url+"?"+data.data;
				}
				xhr.open(type,url,async);
				if(type=='post'){
					xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
				}
				xhr.onreadystatechange = function(){
			        if(xhr.readyState == 4 ){
			            if(xhr.status == 200) {
			            	var response=xhr.responseText;
			            	if(typeof data.success=='function'){
			            		data.success(response);
			            	}else{
			            		if(typeof data.error=='function'){
			            			data.error();
			            		}
			            	}
			            }
			        }
			    }
				
				xhr.send(data.data);
			}
