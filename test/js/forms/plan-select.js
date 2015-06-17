$('#join-basic-plan').click(function(){

    var plan = 'basic-plan';

    $.ajax
    ({ 
        url: 'http://nomful.com/join/plan-select.php',
        data: {"plan": plan},
        type: 'post'
    });
});

$('#join-premium-plan').click(function(){

    var plan = 'premium-plan';

    $.ajax
    ({ 
        url: 'http://nomful.com/join/plan-select.php',
        data: {"plan": plan},
        type: 'post'
    });
});