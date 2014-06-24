/*
Zwei globale Arrays
Behälter für Startzeiten und die DIV-ID's
*/
var ar_elements = new Array();
var ar_timers = new Array();


/*
Einmal durch die ganze Liste loopen um 
die Startzeiten und DIV-ID's aufzunehmen
*/
function storeChildDivs(wrapperId) {
  var wrapper = $('#'+wrapperId);
  var childs = wrapper.children();
  childs.each(function() {
    ar_elements.push($(this).attr('id'));
    ar_timers.push($(this).attr('data-start'));
  });
}

/*
Startzeiten sind steigend sortiert
Wir suchen die erste Zeit, welche vor dem jetzigen Zeitpunkt liegt
*/
function getLastTrigger (ar, aktuelleZeit) {
  for (var i=0; i<ar.length; i++) {
    if(ar[i]>aktuelleZeit) {
      return i;
    }
  }
  return -1;
}

/*
Nur die definierte Anzahl Events wird angezeigt
das letzte Event wird active gekennzeichnet
die kommenden Events werden als upcoming gekennzeichnet
*/
function showActiveDivs (ar_e, actTrigger, a) {
  for (var i=0; i<ar_e.length; i++) {
    if(ar_e[i]<actTrigger) {
      $('#'+ar_e[i]).hide();
    } else if(ar_e[i]<actTrigger + a) {
      if(ar_e[i] == actTrigger) {
        $('#'+ar_e[i]).addClass('active');
        $('#'+ar_e[i]).removeClass('upcoming');
      } else {
        $('#'+ar_e[i]).addClass('upcoming');
      }
      $('#'+ar_e[i]).show();
    } else if(ar_e[i]>=actTrigger + a) {
      $('#'+ar_e[i]).hide();
    }
  }
}

/*
Main
Nimmt Anzahl zu zeigende Events entgegen und berechnet jeweils 
das aktive Event plus die x folgenden
*/
function showBosses (amount) {
  showActiveDivs(
    ar_elements, 
    getLastTrigger(ar_timers, new Date().toLocaleTimeString()),
    amount
  );
};
