$(function () {
  bindEvents();
  setTags();  

})

function bindEvents(){
  $('.categories').change(onCategoryChange);
  $('.conjugs').click(onToggleConjugs);
  
}

function onCategoryChange(e){
  inx = e.target.id.split("_")[1];
  seltext = $('#categories_'+inx+' option:selected').text();
  
  $('.noun').hide();$('.verb').hide();
  if(seltext.startsWith('em'))
    $('.noun').show(500);
  else if(seltext.startsWith('fo'))
    $('.verb').show(500);
  
  $("#catspan_"+inx).html(seltext);
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