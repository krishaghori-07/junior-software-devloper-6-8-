/*write a program to print the qube of every number.
1  8  27...................1000
*/
#include<stdio.h>
void main()
{
    int number,qube;
    for(number=1;number<=10;number++)
    {
        qube=number*number*number;
        printf("%10d",qube);
    }
}