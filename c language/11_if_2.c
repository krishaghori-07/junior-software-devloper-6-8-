#include<stdio.h>
void main()
{
    int length,width;
    printf("enter length:");
    scanf("%d",&length);
    printf("enter width:");
    scanf("%d",&width);

    if(length>width)
    {
        printf("shape is portrait");
    }
    if(width>length)
    {
        printf("shape is landscape");
    }
    if(width==length)
    {
        printf("shape is square");
    }
}