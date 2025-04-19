package repository

import "golang-unit-test/entity"

type CategoryRepository interface {
	FindById(id string) *entity.Category
}