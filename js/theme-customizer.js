/**
 * Created by solomashenko on 21.03.17.
 */
( function( $ ) {
    console.log(111);
    wp.customize( 'fw_options[option_1]', function( value ) {
        value.bind( function( newval ) {
            /**
             * An array of collected html inputs
             * [{'name':'input[name]','value':'input value'}]
             * or
             * [{'name':'input[name]','value':'input value'},{'name':'input[name]','value':'input value'},...]
             */
            newval = JSON.parse(newval);

            $( 'h1' ).text( newval[0].value );
        } );
    } );
} )( jQuery );