#include<bits/stdc++.h>
using namespace std;
struct node{
	int data;
	node *next;
};
node *head=NULL;
node *temp=NULL;
node *p=NULL;
void create_list1(int d,int x){
	head=new node();
	head->data=x/pow(10,d-1);
	int r=x%pow(10,d-1);
	head->next=NULL;
	temp=head;
	p=head;
	for(int i=1; i<d; i++){
		temp=new node();
		temp->data=r/pow(10,d-i-1);
		p->next=temp;
		temp->next=NULL;
		r=r%pow(10,d-i-1);
		p=temp;
	}
	node *n;
	for(n=head; n!=NULL; n=n->next){
		cout<<n->data<<" ";
	}
}
int main(){
	int d;
	cin>>d;
	int x;
	cin>>x;
	create_list1(d,x);
	return 0;
}