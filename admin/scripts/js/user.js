var users = function (email,password,isLogin,cid) { /* chats class */
	this.email = email;
	this.password = password;
	this.cid=cid;
	this.isLogin = isLogin;
}
var user = new users ("null","null",0,-1);



 function setUserLocalStorage() //initialize User localStorage
 {
	let temp=getUserLocalStorage();
	if(temp==null || temp == 'undefined') 
		updateUserLocalStorage(user.email,user.password,user.isLogin,user.cid);
	else
		updateUserLocalStorage(temp.email,temp.password,temp.isLogin,temp.cid);
 }

 function updateUserLocalStorage(email,password,status,cid)  //update User localStorage
 {
	 user["email"]=email;
	 user["password"]=password;
	 user["isLogin"]=status;
	 user["cid"]=cid;
	 localStorage.setItem("user", JSON.stringify(user) );
 }


 function getUserLocalStorage()   //get User localStorage
 {
	return JSON.parse(localStorage.getItem("user"));
 }
 
  function checkIsLogin() //check if login
 {

	 if(user.isLogin==1) return true;
		return false;
 }