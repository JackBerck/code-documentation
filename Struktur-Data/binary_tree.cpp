/**
 * Binary Tree (pohon biner) adalah struktur hierarkis yang terdiri dari node-node yang saling terhubung.
 */
#include <iostream>
using namespace std;

// Mendefinisikan struktur node untuk pohon biner
struct node
{
    int data;
    node *left;
    node *right;
};

// Fungsi untuk membuat node baru
node *create_node(int data)
{
    node *new_node = new node();
    new_node->data = data;
    new_node->left = NULL;
    new_node->right = NULL;
    return new_node;
}

// Fungsi untuk traversal inorder
void inorder_traversal(node *root)
{
    if (root != NULL)
    {
        inorder_traversal(root->left);  // Kunjungi subtree kiri
        cout << root->data << " ";      // Cetak data node
        inorder_traversal(root->right); // Kunjungi subtree kanan
    }
}

// Fungsi untuk traversal preorder
void preorder_traversal(node *root)
{
    if (root != NULL)
    {
        cout << root->data << " ";       // Cetak data node
        preorder_traversal(root->left);  // Kunjungi subtree kiri
        preorder_traversal(root->right); // Kunjungi subtree kanan
    }
}

// Fungsi untuk traversal postorder
void postorder_traversal(node *root)
{
    if (root != NULL)
    {
        postorder_traversal(root->left);  // Kunjungi subtree kiri
        postorder_traversal(root->right); // Kunjungi subtree kanan
        cout << root->data << " ";        // Cetak data node
    }
}

int main()
{
    // Membuat root dan node lainnya
    node *root = create_node(1);
    root->left = create_node(2);
    root->right = create_node(3);
    root->left->left = create_node(4);
    root->left->right = create_node(5);

    // Melakukan traversal inorder dan mencetak hasilnya
    cout << "Inorder Traversal: ";
    inorder_traversal(root);
    cout << endl;

    // Melakukan traversal preorder dan mencetak hasilnya
    cout << "Preorder Traversal: ";
    preorder_traversal(root);
    cout << endl;

    // Melakukan traversal postorder dan mencetak hasilnya
    cout << "Postorder Traversal: ";
    postorder_traversal(root);
    cout << endl;

    return 0;
}
