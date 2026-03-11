#include<stdio.h>
void main()
{
    float weight[10]={10.1,2.8,3.7,5.9,6.7,8.9,6.9,8.8,9.0,10.5};
    float search;
    int position;
    printf("enter value to search:");
    scanf("%f",&search);
    for(position=0;position<=9;position++)
    {
        if(search==weight[position])
        {
            printf("value found at the %d position",position+1);
            break;
        }
    }
    if(position==10)
        {
        printf("value not found");
    }
    
   
}