$(function () {
  bindEvents();
  setTags();  
  $('.add_homonym').click();
})

function bindEvents(){
  // $('.categories').change(onCategoryChange);
  // $('.conjugs').click(onToggleConjugs);
  // $('.add_meaning').click(addMeaning);
  // $('.del_meaning').click(delMeaning);
  // $('.add_role').click(addRole);
  // $('.add_homonym').click(addHomonym);
}

function updateWord(e){
  val = $(e.target).val()
  val = val.toLowerCase()
  val = val.charAt(0).toUpperCase() + val.slice(1);
  $('.word').html(val)
}

function onCategoryChange(e){
  
  seltext = $(e.target).find(':selected').text()
  parent = $(e.target).parents('.role')

  parent.find('.noun').hide();parent.find('.verb').hide();
  if(seltext.startsWith('em'))
    parent.find('.noun').show(500);
  else if(seltext.startsWith('fo'))
    parent.find('.verb').show(500);
  
  $(e.target).parents('.role').find('.catspan').html(seltext);
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
  parent = $(e.target).parents('.role');  
  lastmeaning = parent.find('.meaning:last'); 
  copy  = $('.model .meaning').get(0).outerHTML;
  $(copy).insertAfter(lastmeaning);
  parent.find('.index').each(function( index ) { $( this ).html(index+1);});
  // $('.del_meaning').off('click').on('click', delMeaning);
}

function delMeaning(e){
  parent = $(e.target).parents('.role');
  if (parent.find(".meaning").length == 1) return;
  $(e.target).closest('.meaning').remove();
  parent.find('.index').each(function( index ) { $( this ).html(index+1);});
}

function addRole(e){
  parent = $(e.target).parents('.homonym');  
  lastrole = parent.find('.role:last'); 
  copy  = $('.model .role').get(0).outerHTML;
  $(copy).insertAfter(lastrole);
}

function addHomonym(e){
  model = $('.model'); 
  copy  = model.html();
  $(copy).insertBefore($(".placeholder"));
  $('.hindex').each(function( index ) { $( this ).html(romanize (index));});
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

function romanize (num) {
    if (!+num)
        return false;
    var digits = String(+num).split(""),
        key = ["","C","CC","CCC","CD","D","DC","DCC","DCCC","CM",
               "","X","XX","XXX","XL","L","LX","LXX","LXXX","XC",
               "","I","II","III","IV","V","VI","VII","VIII","IX"],
        roman = "",
        i = 3;
    while (i--)
        roman = (key[+digits.pop() + (i * 10)] || "") + roman;
    return Array(+digits.join("") + 1).join("M") + roman;
}