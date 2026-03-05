/*write a program to findout the factorial of given number.
input:5
output:5*4*3*2*1
output:120
steps:
-----------------------------------------
create variable number,factorial
accept input from user 
factorial(5)=number;

factorial=number-1;
factorial=factorial*number;

factorial=number-1;
factorial=factorial*number;

*/
#include<stdio.h>
void main()
{
    int number,factorial=1;
    printf("enter number:");
    scanf("%d",&number);
   
    while(number>1)
    {

        factorial=factorial*number;
        number--;
    }
    printf("%d",factorial);
}