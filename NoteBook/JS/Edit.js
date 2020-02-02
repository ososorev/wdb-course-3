function Edit(edit_func,note)//загрузка записей пользователя при загрузке страницы
{
	forms.formElement("right", "content2", form2,"form1");
	forms.divElement('Edit note',"Edit_mode","Edit_mode",form1);
	forms.inputElement("Name","name","input","name",form1);
	forms.inputElement("date","date","date","form-control",form1);
	forms.TextElement("Line 1","note",note,"text",form1);
	forms.buttonElement("Button","Save",edit_func,form1,'note_id');
	note_id.classList.add("register1");
}
