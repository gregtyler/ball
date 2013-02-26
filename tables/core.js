function init() {
    var $obj = $('#tables');
    for( var i=0,l=data.length; i<l; i++ ) {
        var table = data[i],
            name = table.name,
            guests = table.guests.sort(),
            $list = $('<ul />');
        
        for( var t=0,k=guests.length; t<k; t++ ) {
            $list.append( $('<li />').html( guests[t] ) );
        }
        
        $table = $('<section />').addClass('table').append(
            $('<h2 />').html( (i+1) + '. ' + name )
        ).append( $list );
        
        $obj.append( $table );
    }
}

init();