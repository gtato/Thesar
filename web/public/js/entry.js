$(function () {
  bindEvents();
  setTags();  

})

function bindEvents(){
  $('.categories').change(onCategoryChange);
  $('.conjugs').click(onToggleConjugs);
  $('.add_meaning').click(addMeaning);
  $('.del_meaning').click(delMeaning);
}

function onCategoryChange(e){
  
  seltext = $(e.target).find(':selected').text()
  parent = $(e.target).parents().find('.utilisation')

  parent.find('.noun').hide();parent.find('.verb').hide();
  if(seltext.startsWith('em'))
    parent.find('.noun').show(500);
  else if(seltext.startsWith('fo'))
    parent.find('.verb').show(500);
  
  $(e.target).parents().find('.utilisation').find('.catspan').html(seltext);
}

function onToggleConjugs(e){
  e.preventDefault();
  if(!$('#conjugs').is(':visible')){
    $('#conjugs').slideDown(500);
    $('#def').slideUp(500);
  }else{
    $('#conjugs').slideUp(500);
    $('#def').slideDown(500);
  }
}

function addMeaning(e){
  parent = $(e.target).parents().find('.utilisation');
  lastmeaning = parent.find('.meaning:last'); 
  copy  = lastmeaning.get(0).outerHTML;
  $(copy).insertAfter(lastmeaning);
  parent.find('.index').each(function( index ) { $( this ).html(index+1);});
  $('.del_meaning').click(delMeaning);
}

function delMeaning(e){
  parent = $(e.target).parents().find('.utilisation');
  if (parent.find(".meaning").length == 1) return;
  $(e.target).closest('.meaning').remove();
  // copy  = lastmeaning.get(0).outerHTML;
  // $(copy).insertAfter(lastmeaning);
  parent.find('.index').each(function( index ) { $( this ).html(index+1);});
}



function setTags()
{

  var citynames = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    prefetch: {
      url: 'tags',
      filter: function(list) {
        return $.map(list, function(cityname) {
          return { name: cityname }; });
      }
    }
  });

  citynames.initialize();

  var elt = $('.tags');
  elt.tagsinput({
    tagClass: 'label label-primary',
    typeaheadjs: {
      name: 'citynames',
      displayKey: 'name',
      valueKey: 'name',
      source: citynames.ttAdapter()
    }
  });

}