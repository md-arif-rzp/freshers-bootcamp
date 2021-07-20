package main



type tree struct{ // struct for tree
	left *tree
	right *tree
	value string
}

func newnode(value string) *tree { // initialze new node
	node := tree{nil, nil,value}
	return &node
}

func inorder(node *tree) { // inorder traversal
	if node == nil {
		return
	}
	inorder(node.left)
	println(node.value)
	inorder(node.right)
}

func preorder(node *tree) { // preorder traversal
	if node == nil {
		return
	}
	println(node.value)
	preorder(node.left)
	preorder(node.right)
}

func postorder(node *tree) { // postorder traversal
	if node == nil {
		return
	}
	postorder(node.left)
	postorder(node.right)
	println(node.value)
}

func main(){
	root := newnode("+")
	root.left = newnode("a")
	root.right = newnode("-")
	root.right.left = newnode("b")
	root.right.right = newnode("c")

	preorder(root)
	postorder(root)

}