/*find the largest number of array*/
#include<stdio.h>
void main()
{
    int a[2][3]={{10,25,15},{40,5,30}};
    int i,j,max;
    max=a[0][0];
    for(i=0;i<2;i++)
    {
        for(j=0;j<3;j++)
        {
            if(a[i][j]>max)
            {
                max=a[i][j];
            }
        }
    }
    printf("largest number=%d",max);
}