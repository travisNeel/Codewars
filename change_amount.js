function giveChange(amount){
    var arr = [100,50,20,10,5,1];
    var result = [];
    
    arr.forEach(function(item){
        result.push(Math.floor(amount/item));
        amount = amount%item;
    });
    
    return result.reverse();
}