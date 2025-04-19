package services

import (
	"golang-unit-test/entity"
	"golang-unit-test/repository"

	"github.com/stretchr/testify/assert"
)

type CategoryService struct {
	Repository repository.CategoryRepository
}

func (service CategoryService) Get(id string) (*entity.Category, error) {
	category := service.Repository.FindById(id)
	if category == nil {
		return nil, assert.AnError
	}

	return category, nil
}
