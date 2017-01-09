//old_pwd new_pwd_0 new_pwd_1 email nickname

//返回散列后的密码
function my_hash(pwd0) {
	return pwd0;
}

window.onload = function (){
	let IDs = ["old_pwd", "new_pwd_0", "new_pwd_1", "email", "nickname"];
	let raw_val = new Array(IDs.length);
	let submit_btn = $("#submit_btn");
	for(let i=0; i<IDs.length; i++) {
		let elem = $("#" + IDs[i]);
		raw_val[i] = elem.val();	//保存表单原始数据用于对比。
		elem.change(function(){
			submit_btn.prop("disabled", false);
		});
	}

	$("#submit_btn").click(function(){
		let np0 = $("#new_pwd_0");
		let np1 = $("#new_pwd_1");
		if (np0.val() != np1.val()) {
			np1[0].focus();
			return;
		}
		let old_pwd = $("#old_pwd");
		if (old_pwd.val().length == 0) {
			old_pwd.focus();
			return;
		}
		//散列后的数据回写到表单然后提交。
		old_pwd.val(my_hash(old_pwd.val()));
		np0.val(my_hash(np0.val()));
		
		$("#info_form").submit();
	});
};