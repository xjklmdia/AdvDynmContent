            $(document).ready(function() {
        var userDiv = document.getElementById("users");   
        var userImgsDiv = document.getElementById("user_imgs");
		var loginPanel = document.getElementById("login_panel");
		//var updatePanel = document.getElementById("update_panel");
			
        //USER LOGIN
        var user_id = -1;
        document.getElementById("login_sub").onclick = function(){
            //connect and insert
            $.ajax({
                url:"controller/user_c.php",
                type: "post",
                dataType:"json",
                data: {
                    method:"login",
                    username: document.getElementById("login_username").value,
                    password: document.getElementById("login_password").value
                },
                success:function(resp){
                    alert("Logged in!");
                    user_id = resp[0].id;
                    console.log(user_id);
					var logoutBut = document.createElement("button"); 
					logoutBut.innerHTML = "Logout";
					
					loginPanel.innerHTML = "";
					loginPanel.appendChild(logoutBut);
					
					//updatePanel.style.display = "block";
					//logout function
					logoutBut.onclick = function(){
						var user_id = -1;
						alert("Logged Out!");
						location.reload();
        			}
                }
            });
        }
        
            });