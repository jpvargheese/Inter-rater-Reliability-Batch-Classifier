$(document).ready(function() {

    //hide everything
    for (var i = 0; i < 10; i++) {
        $('#scenario' + i).hide();
        $('#strategy' + i).hide();
        $('#attributes' + i).hide();
        $('#responseid' + i).hide();
        $('#response_attributes' + i).hide();
        $('#response_radio' + i).hide();
        $('#sub_class').hide();
        

    }
    var order = JSON.parse(strategyIndex);
//    console.log("order = "+order);
//    console.log("First value in order ="+order[0]);

    
//now show the first
    $('#scenario' + order[0]).show();
    $('#strategy' + order[0]).show();
    $('#attributes' + order[0]).show();
    $('#responseid' + order[0]).show();
    $('#response_attributes' + order[0]).show();
    $('#response_radio' + order[0]).show();
    //hide the previous button
   $('#previous').hide();
    
    
    var first = order[0];
    var index = 0;
    var previous = 0;
    //hide the previous button if on the first response
    
    
    
    $('#next').click(function() {
        

        //check that the first response has been classified
        var pCheck = $('#classificationP' +order[index]).prop('checked');
        var nCheck = $('#classificationN' +order[index]).prop('checked');
        var cCheck = $('#classificationC' +order[index]).prop('checked');
        
        
        var ultraCheck = pCheck || nCheck || cCheck;
//        console.log(pCheck);
//        console.log(nCheck);
//        console.log(cCheck);
//        console.log(ultraCheck);
//        console.log([order[index]]);
        
        //if the first response has been classified
        if (ultraCheck) {
            //if they click next after classifying the first response iterate through the order using index
            index++;
            previous = index - 1;
            //hide previous
            $('#scenario' + order[previous]).hide();
            $('#strategy' + order[previous]).hide();
            $('#attributes' + order[previous]).hide();
            $('#responseid' + order[previous]).hide();
            $('#response_attributes' + order[previous]).hide();
            $('#response_radio' + order[previous]).hide();
            //show next
            $('#scenario' + order[index]).show();
            $('#strategy' + order[index]).show();
            $('#attributes' + order[index]).show();
            $('#responseid' + order[index]).show();
            $('#response_attributes' + order[index]).show();
            $('#response_radio' + order[index]).show();
            $('#previous').show();
            
            //if on the last response user clicks next, alert and keep this response
            if (index === 9) {
                index = 9;
                $('#scenario' + order[index]).show();
                $('#strategy' + order[index]).show();
                $('#attributes' + order[index]).show();
                $('#responseid' + order[index]).show();
                $('#response_attributes' + order[index]).show();
                $('#response_radio' + order[index]).show();
                //console.log("index == "+index);
                //$('#sub_class').show();
                //hide next
                $('#next').hide();
               
            }

        } else {
            alert('Please classify this response before proceeding to the next');
            $('#scenario' + order[index]).show();
            $('#strategy' + order[index]).show();
            $('#attributes' + order[index]).show();
            $('#responseid' + order[index]).show();
            $('#response_attributes' + order[index]).show();
            $('#response_radio' + order[index]).show();
        }//ultracheck

//console.log("---next---index == "+index);
//console.log("---next---order[index] == "+order[index]);
//console.log("-start---next---previous = "+order[previous]);
//console.log(order);
console.log(index);
    });//next

    $('#previous').click(function() {
        //prevent the index going lower than 0
        if (index === 0) {
            //assign index to 0
            index = 0;
            //alert this is the first response
          alert("This is the first response to be classified in this category");
           
           
        } else {
            //lower index
            index--;
            previous = index + 1;
            //hide the previous response
            $('#scenario' + order[previous]).hide();
            $('#strategy' + order[previous]).hide();
            $('#attributes' + order[previous]).hide();
            $('#responseid' + order[previous]).hide();
            $('#response_attributes' + order[previous]).hide();
            $('#response_radio' + order[previous]).hide();
            //make sure next is displayed and show the current response
            $('#next').show();
            $('#scenario' + order[index]).show();
            $('#strategy' + order[index]).show();
            $('#attributes' + order[index]).show();
            $('#responseid' + order[index]).show();
            $('#response_attributes' + order[index]).show();
            $('#response_radio' + order[index]).show();
        }
        checkIndex();
        console.log(index);
    });//previous

    function checkIndex(){
    if(index ===0){
        $('#previous').hide();
    }else{
        $('#previous').show();
    }
    
}

//only show the submit button if the last response has been classified
    $('#classificationP'+order[9]).click(function() {
        $('#sub_class').show();
    });

    $('#classificationN'+order[9]).click(function() {
        $('#sub_class').show();
    });

    $('#classificationC'+order[9]).click(function() {
        $('#sub_class').show();
    });

});

