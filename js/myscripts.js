
  	$(document).ready(function(){



   $('.inputs').keypress(function(e) {
       if (!(e.which==8 || e.which==44 ||e.which==45 ||e.which==46 ||(e.which>47 && e.which<58))) return false;
        	});

        $('.subm').click(function(){
            data = [2,32,1,2,1,2];

            $(".inputs").each(function(element) {

                var valueNew = this.value ;



            });


            function BubbleSort()       // A - массив, который нужно
            {                            // отсортировать по возрастанию.
                var n = data.length;
                for (var i = 0; i < n-1; i++)
                { for (var j = 0; j < n-1-i; j++)
                { if (data[j+1] < data[j])
                { var t = data[j+1]; data[j+1] = data[j]; data[j] = t; }
                }
                }
                return data;    // На выходе сортированный по возрастанию массив A.
            }





            BubbleSort(data);
            document.write(data);
            console.log(data);



        });
    	});

