/*write a program to do the multiplication table of the number which is gicen by the user.
input:5
output:
5*1=5
5*2=10
5*3=15
......
......
......
5*10=50
make variable of number,multiplier and answer
accept the input from user
multiplier=1

answer=number*multiplier;
print number*multiplier=answer
multiplier=multiplier+1;
*/
#include<stdio.h>
void main()
{
    int number,multiplier,answer;
    printf("enter number:");
    scanf("%d",&number);
    multiplier=1;

    while(multiplier<=10)
    {
        answer=number*multiplier;
        printf("%2d * %2d=%2d\n",number,multiplier,answer);
         multiplier++;
    }
}