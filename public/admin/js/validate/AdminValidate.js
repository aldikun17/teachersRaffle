var validate = new function()
{

	this.required = function(value,html_id,name,alert)
	{

		if(!value == '')
	    {

	      html_id.style.border = "1px solid grey";

	      $(alert).html('');

	      $(alert).hide();

	      return true;

	    }

	    var message_required = name + ' field is required ';

	    html_id.style.border = "1px solid red";

	    html_id.focus();

      	$(alert).show();

      	$(alert).html(message_required);


	}


}

var Input = new function()
{
	this.get = function(id)
    {
      return document.getElementById(id);
    }

}