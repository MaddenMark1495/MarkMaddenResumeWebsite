//Mark Madden
//mcmpw6
//4/7/2014
//lab code 4072014
//

#include<stdio.h>
#include<time.h>
#include<stdlib.h>
#define MAX 100

void initialiaze_array(int*,int);
void print_array(int*,int);
int check_size(int);
int count_even(int*,int);
float median(int*,int);
int count_duplicate(int*,int);
void sort(int*,int);


int main(void)
{
        int a[MAX];
        int *p;
        int size;
        int check;
        p=a;
        srand(time(NULL));
        printf("Enter the size:");
        scanf("%d",&size);
        check=check_size(size);

        while(check==0)
        {
          printf("Invalid input enter the size of the input again:");
          scanf("%d",&size);
          check=check_size(size);
        }
   

       initialiaze_array(p,size);
       print_array(p,size);
       printf("There are %d even numbers present in array",count_even(p,size));
 



        return 0;
 
}
int check_size(int sz)
{
        if(sz<0||sz>100)
          return 0;

          else
          return 1;
}
void initialiaze_array(int*p,int size)
{       
      
        int i;
        for(i=0;i<size;i++)
        {
           *p=rand()%10;
             printf(" %d ",*p);
	    p++;


        }
	printf("\n");
}
void print_array(int*p,int size)
{      
       
        int i;
        printf("\n");
        for(i=0;i<size;i++){
           printf("%d ",*(p+i));  
        }
           printf("\n");

}
int count_even(int*p,int size)
{
        int i;
        int even=0;
	for(i=0;i<size;i++){
            if(*(p+i)%2==0){
                even++;
            }
        }
      return even;  
}

/*void sort(int*p,int sz)
{

     int c;
     int d;
     int t;     	

for (c = 0 ; c < ( sz - 1 ); c++)
  {
    for (d = 0 ; d < sz - c - 1; d++)
    {
      if ((p+c) >(p+1))
      {

 
        t=(p+d);
        (p+d)=(p+1);
        (p+1)=t;
      }
    }
  }
}




float median(int ptr,int size)
 {



	int i;
        for(i=0,i







}
*/





