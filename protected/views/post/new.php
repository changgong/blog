<?php
	Yii::app()->clientScript->registerScriptFile($this->getAssetsBase().'/js/jquery-1.8.3.js',CClientScript::POS_END);
	Yii::app()->clientScript->registerScriptFile($this->getAssetsBase().'/js/post-validator.js',CClientScript::POS_END);
?>
<h1>Create New Post</h1>
<form action="/post/new" method="post">
	<div class="row">
		<label for="Post_title">Title</label>
		<input id="Post_title" name="Post[title]" type="text" />
		<div class="errormsg" id="Post_title_em"></div>
	</div>
	<div class="row">
		<label for="Post_content">Content</label>
		<input id="Post_content" name="Post[content]" type="text" />
		<div class="errormsg" id="Post_content_em"></div>
	</div>
	<div class="row">
		<label for="Post_status">Status</label>
		<?php
			echo CHtml::dropDownList('Post[status]','Post[status]',Lookup::model()->items('PostStatus'));
		?>
		<!-- <input id="Post_status" name="Post[status]" type="text" /> -->
		<div class="errormsg" id="Post_status_em"></div>
	</div>
	<div class="row">
		<label for="Post_tags">Tags</label>
		<!-- <input id="Post_tags" name="Post[tags]" type="text" /> -->
		<?php 
			Yii::app()->clientScript->registerScript('scriptID','
				function split(val){
					return val.split(/,\s*/);
				}
				function extractLast(term){
					return split(term).pop();
				}
			',CClientScript::POS_END);

			$this->widget('zii.widgets.jui.CJuiAutoComplete',array(
				'id'=>'Post_tags',
				'name'=>'Post[tags]',
				'source'=>'js:function(request,response){
					$.getJSON("'.$this->createUrl('post/suggestTag').'",{
						term: extractLast(request.term)
					},response);
				}',
				'options'=>array(
					'minLength'=>1,
					'select'=>"js:function(event,ui){
						$('.tags').append('<span>'+ui.item.value+'</span><br/>');
						var terms = split(this.value);
						//remove the current input
						terms.pop();
						//add the selected item
						terms.push(ui.item.value);
						//add placeholder to get the comma-and-space at the end
						terms.push(' ');
						this.value = terms.join(', ');
						return false;
					}"
				),
				'htmlOptions'=>array(
					'style'=>'width:170px',
				),
			));
		?>
		<div class="errormsg" id="Post_tags_em"></div>
	</div>
	<div class="row">
		<div class="tags">
			
		</div>
	</div>
	<div class="buttons">
		<input type="submit" name="submit" value="Create" />
	</div>
</form>