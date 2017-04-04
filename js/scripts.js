/**
 * Created by romansolomashenko on 04.04.17.
 */
( function( $ ) {
    //alert("Hello world");
    console.log(fw);



    /**/
    $(document).ready(function () {




        /*fw.loading.show();

        setTimeout(function(){
         fw.loading.hide();
         }, 3000);





        // Options Modal


        /*var modal = new fw.OptionsModal({
            title: 'Custom Title',
            options: [
                {'test_1': {
                    'type': 'text',
                    'label': 'Test1'
                }},
                {'test_2': {
                    'type': 'textarea',
                    'label': 'Test2'
                }}
            ],
            values: {
                'test_1': 'Default 1',
                'test_2': 'Default 2'
            },
            size: 'small' // 'medium', 'large'
        });

        modal.on('change:values', function(modal, values) {
            console.log(values);
        });

        // replace values
        modal.set('values', {
            'test_1': 'Custom 1',
        });

        modal.open();*/

        // Confirmation

        /*var confirm = fw.soleConfirm.create({
         severity: 'info', // warning | info
         message: 'Some message to display', // or null, if you don't want any
         backdrop: null // null | false | true
         });
         confirm.result; // Instance of jQuery.Deferred factory
         confirm.result.then(function (confirm_instance) {
         // confirm_instance is same as confirm
         // Handle success branch
         });
         confirm.result.fail(function (confirm_instance) {
         // Handle fail branch
         });

         confirm.show();*/


        //Queueing confirms

        /*var confirm1 = fw.soleConfirm.create();
        var confirm2 = fw.soleConfirm.create();

        confirm1.show();
        confirm2.show();

        confirm1.hide(); // В этот момент на экран будет выведено значение confirm2, результаты буферизуются*/

    });


} )( jQuery );