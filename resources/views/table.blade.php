<script>

function myFunction() {
    var x = document.getElementById('myTopnav');
    if (x.className === 'topnav') {
      x.className += ' responsive';
    } 
    else {
      x.className = 'topnav';
    }
  } 

  $(document).ready(function() {
      $('#racun').DataTable();
      responsive: true
  } );
  
  $('#racun').dataTable( {
    'lengthMenu': [ 6,10,50, 75, 100 ],
    'order': [],
    'ordering': true,
    'language':  {
              'decimal':          ',',
              'sEmptyTable':      'Nema podataka u tablici',
              'sInfo':            'Prikazano _START_ do _END_ od _TOTAL_ rezultata',
              'sInfoEmpty':       'Prikazano 0 do 0 od 0 rezultata',
              'sInfoFiltered':    '(filtrirano iz _MAX_ ukupnih rezultata)',
              'sInfoPostFix':     '',
              'sInfoThousands':   ',',
              'sLengthMenu':      'Prikaži _MENU_ rezultata po stranici',
              'sLoadingRecords':  'Dohvaćam...',
              'sProcessing':      'Obrađujem...',
              'sSearch':          'Pretraži:',
              'sZeroRecords':     'Ništa nije pronađeno',
              'oPaginate': {
                  'sFirst':       'Prva',
                  'sPrevious':    'Nazad',
                  'sNext':        'Naprijed',
                  'sLast':        'Zadnja'
              },
              'oAria': {
                  'sSortAscending':  ': aktiviraj za rastući poredak',
                  'sSortDescending': ': aktiviraj za padajući poredak'
              }
          }
  } );
</script>