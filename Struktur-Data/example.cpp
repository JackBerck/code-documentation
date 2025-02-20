#include <iostream>

using namespace std;

// int main()
// {
//     int data[10] = {5, 3, 8, 4, 2, 7, 1, 10, 6, 9};
//     int n = 10;

//     for (int i = 0; i < n; i++)
//     {
//         for (int j = 0; j < n - i - 1; j++)
//         {
//             if (data[j] > data[j + 1])
//             {
//                 int temp = data[j];
//                 data[j] = data[j + 1];
//                 data[j + 1] = temp;
//             }
//         }
//     }
// }

// int main() {
//     int data[10] = {5, 3, 8, 4, 2, 7, 1, 10, 6, 9};
//     int n = 10;

//     for (int i = 0; i < n; i++) {
//         int minIndex = i;
//         for (int j = i + 1; j < n; j++) {
//             if (data[j] < data[minIndex]) {
//                 minIndex = j;
//             }
//         }

//         int temp = data[i];
//         data[i] = data[minIndex];
//         data[minIndex] = temp;
//     }
// }

/**
 * Bubble Sort
 */
// int main()
// {
//     int data[10] = {5, 3, 8, 4, 2, 7, 1, 10, 6, 9};
//     int n = 10;

//     for (int i = 0; i < n; i++)
//     {
//         for (int j = 0; j < n - i - 1; j++)
//         {
//             if (data[j] > data[j + 1])
//             {
//                 int temp = data[j];
//                 data[j] = data[j + 1];
//                 data[j + 1] = temp;
//             }
//         }
//     }

//     return 0;
// }

/**
 * Selection Sort
 */
// int main()
// {
//     int data[10] = {5, 3, 8, 4, 2, 7, 1, 10, 6, 9};
//     int n = 10;

//     for (int i = 0; i < n; i++)
//     {
//         int minIndex = i;
//         for (int j = i + 1; j < n; j++)
//         {
//             if (data[j] < data[minIndex])
//             {
//                 minIndex = j;
//             }
//         }

//         int temp = data[i];
//         data[i] = data[minIndex];
//         data[minIndex] = temp;
//     }

//     return 0;
// }

/**
 * Insertion Sort
 */
// int main()
// {
//     int data[10] = {5, 3, 8, 4, 2, 7, 1, 10, 6, 9};
//     int n = 10;

//     for (int i = 1; i < n; i++)
//     {
//         int key = data[i];
//         int j = i - 1;
//         while (j >= 0 && data[j] > key)
//         {
//             data[j + 1] = data[j];
//             j--;
//         }
//         data[j + 1] = key;
//     }

//     return 0;
// }

/**
 * Pointer and Deference
 */
// int main()
// {
//     int a = 10;
//     int *p = &a;
//     cout << "Nilai a: " << a << endl;
//     cout << "Alamat a: " << &a << endl;
//     cout << "Nilai p: " << *p << endl;
//     cout << "Alamat p: " << p << endl;
//     return 0;
// }

// int main()
// {
//     int x = 8;
//     int *xptr1;
//     int **xptr2;
//     xptr1 = &x;
//     xptr2 = &xptr1;
//     cout << "Nilai x = " << x << endl;
//     cout << "Nilai x = " << *xptr1 << endl;
//     cout << "Nilai x = " << **xptr2 << endl;
//     cout << "Alamat x = " << &x << endl;
//     cout << "Alamat x = " << xptr1 << endl;
//     cout << "Alamat x = " << *xptr2 << endl;
//     return 0;
// }

/**
 * Single Linked List
 */
// struct node
// {
//     int data;
//     node *next;
// };

// node *head = NULL, *current = NULL, *next = NULL;

// void insertFirst(int data)
// {
//     node *newNode = new node;
//     newNode->data = data;
//     newNode->next = NULL;

//     if (head == NULL)
//     {
//         head = newNode;
//         current = newNode;
//     }
//     else
//     {
//         newNode->next = head;
//         head = newNode;
//         current = newNode;
//     }
// }

// void drop(int target)
// {
//     node *temp = head;
//     while (temp != NULL)
//     {
//         if (temp->data == target)
//         {
//             temp->next = NULL;
//         }
//         else
//         {
//             temp = temp->next;
//         }
//     }
// }

// void insertLast(int data) {
//     node *newNode = new node;
//     newNode->data = data;

//     if (head == NULL) {
//         head = newNode;
//         current = newNode;
//     } else {
//         node *temp = head;
//         while (temp->next != NULL) {
//             temp = temp->next;
//         }
//         temp->next = newNode;
//     }
// }

// void display()
// {
//     node *temp = head;
//     while (temp != NULL)
//     {
//         cout << temp->data << " ";
//         temp = temp->next;
//     }
//     cout << endl;
// }

// int main()
// {
//     insertFirst(5);
//     insertFirst(3);
//     insertFirst(8);
//     insertFirst(4);
//     insertFirst(2);
//     insertFirst(7);
//     insertFirst(1);
//     insertFirst(10);
//     insertFirst(6);
//     insertFirst(9);

//     return 0;
// }

/**
 * Double Linked List
 */
// struct node
// struct node
// {
//     int data;
//     node *next;
//     node *prev;
// };

// node *head = NULL, *tail = NULL, *current = NULL;

// void insertFirst(int data)
// {
//     node *newNode = new node;
//     newNode->data = data;
//     newNode->next = NULL;
//     newNode->prev = NULL;

//     if (head == NULL)
//     {
//         head = newNode;
//         tail = newNode;
//         current = newNode;
//     }
//     else
//     {
//         newNode->next = head;
//         head->prev = newNode;
//         head = newNode;
//         current = newNode;
//     }
// }

// void insertLast(int data) {
//     node *newNode = new node;
//     newNode->data = data;
//     newNode->next = NULL;

//     if (head == NULL) {
//         head = newNode;
//         current = newNode;
//         tail = newNode;
//     } else {
//         node *temp = head;
//         while (temp->next != NULL) {
//             temp = temp->next;
//         }
//         temp->next = newNode;
//         newNode->prev = temp;
//         tail = newNode;
//     }
// }

/**
 * Binary Search
 */

int binarySearch(int arr[], int size, int target)
{
    int left = 0;
    int right = size - 1;

    while (left <= right)
    {
        int mid = left + (right - left) / 2;

        // Cek apakah target ada di tengah
        if (arr[mid] == target)
        {
            return mid;
        }

        // Jika target lebih besar, abaikan bagian kiri
        if (arr[mid] < target)
        {
            left = mid + 1;
        }
        // Jika target lebih kecil, abaikan bagian kanan
        else
        {
            right = mid - 1;
        }
    }

    // Jika target tidak ditemukan
    return -1;
}

int main()
{
    int arr[] = {2, 3, 4, 10, 40};
    int size = sizeof(arr) / sizeof(arr[0]);
    int target = 10;

    int result = binarySearch(arr, size, target);
    if (result != -1)
    {
        cout << "Element found at index " << result << endl;
    }
    else
    {
        cout << "Element not found in array" << endl;
    }

    return 0;
}

/**
 * Stack
 */
#include <iostream>
#define MAX 100

using namespace std;

class Stack
{
private:
    int arr[MAX];
    int top;

public:
    Stack()
    {
        top = -1;
    }

    bool isFull()
    {
        return top == MAX - 1;
    }

    bool isEmpty()
    {
        return top == -1;
    }

    void push(int value)
    {
        if (isFull())
        {
            cout << "Stack overflow" << endl;
        }
        else
        {
            arr[++top] = value;
            cout << "Pushed " << value << " into stack" << endl;
        }
    }

    void pop()
    {
        if (isEmpty())
        {
            cout << "Stack underflow" << endl;
        }
        else
        {
            cout << "Popped " << arr[top--] << " from stack" << endl;
        }
    }

    int peek()
    {
        if (isEmpty())
        {
            cout << "Stack is empty" << endl;
            return -1;
        }
        else
        {
            return arr[top];
        }
    }

    void display()
    {
        if (isEmpty())
        {
            cout << "Stack is empty" << endl;
        }
        else
        {
            cout << "Stack elements: ";
            for (int i = 0; i <= top; i++)
            {
                cout << arr[i] << " ";
            }
            cout << endl;
        }
    }
};

int main()
{
    Stack stack;

    stack.push(10);
    stack.push(20);
    stack.push(30);

    stack.display();

    stack.pop();
    stack.display();

    cout << "Top element is " << stack.peek() << endl;

    return 0;
}

/**
 * Queue
 */

#include <iostream>
#define MAX 100

using namespace std;

class Queue
{
private:
    int arr[MAX];
    int front;
    int rear;
    int size;

public:
    Queue()
    {
        front = -1;
        rear = -1;
        size = 0;
    }

    bool isFull()
    {
        return size == MAX;
    }

    bool isEmpty()
    {
        return size == 0;
    }

    void enqueue(int value)
    {
        if (isFull())
        {
            cout << "Queue overflow" << endl;
        }
        else
        {
            rear = (rear + 1) % MAX;
            arr[rear] = value;
            size++;
            if (front == -1)
            {
                front = rear;
            }
            cout << "Enqueued " << value << " into queue" << endl;
        }
    }

    void dequeue()
    {
        if (isEmpty())
        {
            cout << "Queue underflow" << endl;
        }
        else
        {
            cout << "Dequeued " << arr[front] << " from queue" << endl;
            front = (front + 1) % MAX;
            size--;
            if (size == 0)
            {
                front = -1;
                rear = -1;
            }
        }
    }

    int peek()
    {
        if (isEmpty())
        {
            cout << "Queue is empty" << endl;
            return -1;
        }
        else
        {
            return arr[front];
        }
    }

    void display()
    {
        if (isEmpty())
        {
            cout << "Queue is empty" << endl;
        }
        else
        {
            cout << "Queue elements: ";
            for (int i = 0; i < size; i++)
            {
                cout << arr[(front + i) % MAX] << " ";
            }
            cout << endl;
        }
    }
};

int main()
{
    Queue queue;

    queue.enqueue(10);
    queue.enqueue(20);
    queue.enqueue(30);

    queue.display();

    queue.dequeue();
    queue.display();

    cout << "Front element is " << queue.peek() << endl;

    return 0;
}

/**
 * Graph
 */
#include <vector>
#include <list>

class Graph
{
private:
    int numVertices;
    vector<list<int>> adjLists;

public:
    Graph(int vertices)
    {
        numVertices = vertices;
        adjLists.resize(vertices);
    }

    void addEdge(int src, int dest)
    {
        adjLists[src].push_back(dest);
        adjLists[dest].push_back(src); // Untuk graph tidak berarah
    }

    void display()
    {
        for (int i = 0; i < numVertices; i++)
        {
            cout << "Vertex " << i << ":";
            for (int vertex : adjLists[i])
            {
                cout << " -> " << vertex;
            }
            cout << endl;
        }
    }
};

int main()
{
    Graph graph(5);

    graph.addEdge(0, 1);
    graph.addEdge(0, 4);
    graph.addEdge(1, 2);
    graph.addEdge(1, 3);
    graph.addEdge(1, 4);
    graph.addEdge(2, 3);
    graph.addEdge(3, 4);

    graph.display();

    return 0;
}