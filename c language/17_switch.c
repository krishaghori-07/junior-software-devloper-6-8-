/*write a program to take input from user and make the addition ,substraction,division and multiplication.
variable num1,num2,choice
variable float result
accept input from user in num1
aceept input from user in num2
accept choice from user
decide operation upon user choice
if choice==1 then
result=num1+num2;
if choice==2 then
result=num1-num2
if choice==3 then
result=num1/num2;
if choice==4 then
result=num1*num2;
otherwise 
print invalid choice
*/
#include<stdio.h>
void main()
{
    int num1,num2,choice;
    float result;
    printf("enter num1:");
    scanf("%d",&num1);
    printf("enter num2:");
    scanf("%d",&num2);
    printf("1.addition 2.substraction 3.division 4.multiplication");
    printf("enter your choice:");
    scanf("%d",&choice);

    switch(choice)
    {
        case 1:
            result=num1+num2;
            break;
        
        case 2:
            result=num1-num2;
            break;

        case 3:
            result=num1/num2;
            break;

        case 4:
            result=num1*num2;
            break;

        default:
        printf("invalid choice");
        break;
    }
   if(choice>=1&&choice<=4)
   {
     printf("result=%.2f",result);
   }
}