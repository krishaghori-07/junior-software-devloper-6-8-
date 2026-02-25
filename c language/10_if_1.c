/*write a program to findout the qube of given positive number.
variable qube,number
take input from user
if condition
check the user input numbe is negative or positive if negative
so convert it into positive number:
number=0-number
print the message your number is converted from negative to positive
qube formula
qube=number*number*number;
printf the result
*/
#include<stdio.h>
void main()
{
    int qube,number;
    printf("enter number:");
    scanf("%d",&number);
    if(number<0)
    {
        number=0-number;
        printf("your number is negative so converted into the positive");
    }
    qube=number*number*number;
    printf("qube:%d",qube);
}