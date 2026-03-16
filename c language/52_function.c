/*write a program with return value without argument*/
#include<stdio.h>
int getpi()
{
    int pi=11;
    return pi;
}
void main()
{
    int radius,area,pi;
    printf("enter area of circle:");
    scanf("%d",&radius);
    pi=getpi();
    area=(pi*radius*radius)/7;
    printf("the area of circle is:%d",area);
}