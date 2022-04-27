// var a=1
// b=2
// document.write(a+''+b)
// document.write(a+b) concat
// using 3rd variable

// c=a
// a=b
// b=c

// without using 3rd
// a=a+b //a=1+2=3
// b=a-b //b=3-2=1
// a=a-b //a=3-1=2

// single line
// a=(a+b)-(b=a)

// a=(1+2)-1

// document.write(10!=="10")

// a=1
// document.write(true==1)

// document.write(a)

// if(a>b){
//     document.write('A is greater')
// }else if(b>a){
//     document.write('B is greater')
// }else{
//     document.write('Equal')
// }

// a = 200;
// b = 200;
// switch (false) {
//   case a > b: //false
//     document.write("a");
//     break;
//   case b > a: //false
//     document.write("b");
//     break
//   default:
//     document.write("==");
// }




// day=new Date().getDay()

// switch(day){
//     case 1:
//         document.write('Monday')
//         break;
//         case 4:
//         document.write('Thursday')
//         break;
// }



// 10 < 20



// for(a=10;a<21;a++){

//     if(a==15){
//        continue
//     }
//     document.write(a+"<br>")
// }








// 75 > 55

// a=75;
// do{
   
//     document.write(a+"<br>")
//     a--
// }while(a<=55)







// number=10
// for(i=1;i<=10;i++){
//     document.write(number+"*"+i+"="+number*i+"<br>")
// }

// 2*1=2

// // 
// -----
// -   -
// -----
// -   -





// for(i=1;i<=5;i++){
//     for(j=1;j<=5;j++){
//         if(i==1 ){
//             document.write("*")
//         }else if(j==1){
//             document.write("*")
//         }
//         else if(i==5 && j<4){
//             document.write("*")
//         }
//         if(i==3 && (j==3 || j==4) ){
//             document.write("*")
//         }else if(i==4 && j==4){
//             document.write("*")
//         }
//         else{
//             document.write("&nbsp;&nbsp;")
//         }
//     }
//     document.write("<br>")
// }




// here b and c is parameters
// function a(b,c){
//     document.write(b+c+"<br>")
    
// }
// here 2,3 are arguments
// a(2,3)

// a(6,9)


// a('hello all')

// a()

// function a(){
//     document.write(5)
//     return 6
// }
// document.write(a()+60)

// a()
// anonymous
// var a=function(){
//     document.write("Hello")
// }
// task 1
// a=[1,3,6]




// a=["jkdjkfs",6,true]
// document.write(a[2])
// console.log(a)

// for(i=0;i<=2;i++){
//     document.write(a[i]+"<br>")
// }
// a={name:'umesh',city:'noida'}

// console.log(a)
// document.write(a.city+a.name)

// document.write(a["name"])



// JSON -> Java Script Object Notation
// API


// a=[1,23,330]

// b=0

// for(i=0;i<3;i++){
//     b=b+a[i]
//     // b+=a[i]
// }

// document.write(b)


// b="fkjds kj fsd jkfkj"

// document.write(b.slice(10,12))

// document.write(b.lastIndexOf("kj",5))

// a="hello how are you";

// document.write(a.charCodeAt(0))


// document.write(a.replace("h","H"))
// b=a.split(".")

// ext=b[b.length-1]

// if(ext=="png" || ext=="jpg"){
//     document.write('Image')
// }else{
//     document.write("Not Image")
// }



// a=parseFloat("6")
// b=parseFloat("4")

// document.write(a+b)


// a=Math.floor(4.1)

// 0-49 - same
// 50-99 - next
// document.write(a)



// pagination



// data=26
// pp=5

// document.write(data/pp)




// a=Math.random()
// 6 digits
// 0-1
// document.write(a)
// a="hello! how you ram"
// b=a.split(" ").length
// document.write(b)




// a="umesh"


// b=a.length;

// for(i=0;i<b;i++){
//     for(j=0;j<=i;j++){
//         document.write(a.charAt(j))
//     }
//     document.write("<br>")
// }


// function randomString(l=6){
//     var a="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
//     var len=a.length;

//     var x=""
//     for(i=1;i<=l;i++){
//         var r=Math.floor(Math.random()*len);
//         x=x+a.charAt(r)
        
//     }
//     return x
    


// }

// document.write(randomString(10))





a=[10,2,3,4]
b=[56,6,99,9,5]
// a.push("hello")
// a.pop()

// a.shift()
// a.unshift("kdlflksdklf")


// delete a[2]


// a.splice(2,2,"abc","def") 
// single arg then it starts deleting from that pos.


c=a.concat(b)

console.log(c.join("*"))














