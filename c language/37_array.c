#include<stdio.h>
void main()
{
    int array[10]={10,20,30,40,50,60,70,80,90,00};
    int sum=0,i;
    for(i=0;i<=9;i++)
    {
        sum=sum+array[i];
    }
    printf("sum %d",sum);
}